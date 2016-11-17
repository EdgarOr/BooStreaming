<?php

namespace backend\controllers;

use Yii;
use backend\models\Peliculas;
use backend\models\PeliculasHasActores;
use backend\models\PeliculasHasDirectores;
use backend\models\PeliculasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use backend\models\Actores;
use backend\models\Directores;
/**
 * PeliculasController implements the CRUD actions for Peliculas model.
 */
class PeliculasController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Peliculas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PeliculasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Peliculas model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


    public function registrarPortadaURL($model) {
            if(!empty( $model->portadaUrl)) {
                $nombreImagen = $model->pelicula_titulo;
                $model->portadaUrl = UploadedFile::getInstance($model, 'portadaUrl');
                $model->portadaUrl->saveAs( 'portadas/'.$nombreImagen.'.'.$model->portadaUrl->extension );

                return 'portadas/'.$nombreImagen.'.'.$model->portadaUrl->extension;
                
            } else {
                return  'portadas/sin_titulo';     
            }

    }

    public function registrarPeliculaURL($model) {
        if(!empty( $model->peliculaUrl)) {
                $nombreImagen = $model->pelicula_titulo;
                $model->peliculaUrl = UploadedFile::getInstance($model, 'pelicula_url');
                $model->peliculaUrl->saveAs( 'peliculas/'.$nombreImagen.'.'.$model->peliculaUrl->extension );

                return 'peliculas/'.$nombreImagen.'.'.$model->peliculaUrl->extension;
                
            } else {
                return 'peliculas/sin_titulo';
            }
    }

    /**
     * Creates a new Peliculas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Peliculas();
        $actor = new Actores();
        $director = new Directores;

        if ($model->load(Yii::$app->request->post()) && $actor->load(Yii::$app->request->post() )) {
         
            $peliculaActor = new PeliculasHasActores;           
            $peliculaDirector = new PeliculasHasDirectores;           
            
            $model->pelicula_url = $this->registrarPeliculaURL($model);
            $model->pelicula_portada = $this->registrarPortadaURL($model);
            $model->pelicula_fechaAlta = date('Y-m-d');
            $model->save();

             if (!empty($actor->actor_nombre)) {
                 $actor->save();
            }

            if (!empty($actor->actores)) {
                foreach ($actor->actores as $idActor) {
                    $peliculaActor->isNewRecord =true;
                    $peliculaActor->peliculas_pelicula_id = $model->pelicula_id;
                    $peliculaActor->actores_actor_id = $idActor;
                    $peliculaActor->save();                    
                }                
            }
            if (!empty($director->directores)) {
                foreach ($director->directores as $idDirector) {
                    $peliculaDirector->isNewRecord =true;
                    $peliculaDirector->peliculas_pelicula_id = $model->pelicula_id;
                    $peliculaDirector->directores_director_id = $idDirector;
                    $peliculaDirector->save();                    
                }                
            }

            return $this->redirect(['view', 'id' => $model->pelicula_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
                'actor' => $actor,
                'director' => $director,
            ]);
        }
    }

    
    /**
     * Updates an existing Peliculas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->pelicula_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Peliculas model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Peliculas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Peliculas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Peliculas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
