<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

use frontend\models\Peliculas;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PeliculasSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

if(Yii::$app->user->isGuest){
    return Yii::$app->response->redirect(Url::to(['site/index']));
}

$this->title = 'BooStreaming';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peliculas-index">

    <?php 
        $pelicula1 = new Peliculas();
        //$todas = Peliculas::find()->where(['pelicula_id' => 1])->all();
        //$pelicula1 = Peliculas::find()->where(['pelicula_id' => 9, 'pelicula_duracion' => 147])->one();

        $accion = Peliculas::findAll(['pelicula_categoria' => 'Accion']);
        $terror = Peliculas::findAll(['pelicula_categoria' => 'Terror']);
        $suspenso = Peliculas::findAll(['pelicula_categoria' => 'Suspenso']);
        $drama = Peliculas::findAll(['pelicula_categoria' => 'Drama']);

        $recientes = Peliculas::find()->orderBy('pelicula_fechaAlta DESC')->limit(10)->all();

//        print_r($todas[0]->pelicula_titulo);

    ?>

    <!--.películas de recientes-->
    <div class="panel panel-info">
        <div class="panel-heading">
            Añadidas recientemente
        </div>

        <div class="container-fluid">
            <div class="row" style="overflow-y: scroll; display: flex">
                
                <?php
                    foreach ($recientes as $peli) {
                ?>

                    <div class='col-lg-2 col-md-3 col-sm-4 col-xs-12 panel-primary' style="min-width: 180px">
                        <div class="panel-heading" style="white-space: nowrap;">
                            <?= "<a style='color:white !important' href='index.php?r=site/video&m=" . 
                                $peli->pelicula_id .
                            "'>" .
                                $peli->pelicula_titulo .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-body panel-body-peli">
                            <?= "<a href='index.php?r=site/video&m=" . 
                                //str_replace(" ", "", $peli->pelicula_titulo) .
                                $peli->pelicula_id .
                            "'>" .
                                "<img src='" . $peli->pelicula_portada . "' alt=''>" .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-footer">
                            <?= $peli->pelicula_anio?>
                        </div>                    
                    </div>

                <?php    
                    }

                ?>

            </div>
        </div>
    </div><!--./películas de recientes-->

    <!--.películas de acción-->
    <div class="panel panel-info">
        <div class="panel-heading">
            Películas de acción
        </div>

        <div class="container-fluid">
            <div class="row" style="overflow-y: scroll; display: flex">
                
                <?php
                    foreach ($accion as $peli) {
                ?>

                    <div class='col-lg-2 col-md-3 col-sm-4 col-xs-12 panel-primary' style="min-width: 180px">
                        <div class="panel-heading" style="white-space: nowrap;">
                            <?= "<a style='color:white !important' href='index.php?r=site/video&m=" . 
                                $peli->pelicula_id .
                            "'>" .
                                $peli->pelicula_titulo .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-body panel-body-peli">
                            <?= "<a href='index.php?r=site/video&m=" . 
                                //str_replace(" ", "", $peli->pelicula_titulo) .
                                $peli->pelicula_id .
                            "'>" .
                                "<img src='" . $peli->pelicula_portada . "' alt=''>" .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-footer">
                            <?= $peli->pelicula_anio?>
                        </div>                    
                    </div>

                <?php    
                    }

                ?>

            </div>
        </div>
    </div><!--./películas de acción-->

    <!--.películas de terror-->
    <div class="panel panel-info">
        <div class="panel-heading">
            Películas de terror
        </div>

        <div class="container-fluid">
            <div class="row" style="overflow-y: scroll; display: flex;">
                
                <?php
                    foreach ($terror as $peli) {
                ?>

                    <div class='col-lg-2 col-md-3 col-sm-4 col-xs-12 panel-primary' style="min-width: 180px">
                        <div class="panel-heading" style="white-space: nowrap;">
                            <?= "<a style='color:white !important' href='index.php?r=site/video&m=" . 
                                $peli->pelicula_id .
                            "'>" .
                                $peli->pelicula_titulo .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-body panel-body-peli">
                            <?= "<a href='index.php?r=site/video&m=" . 
                                //str_replace(" ", "", $peli->pelicula_titulo) .
                                $peli->pelicula_id .
                            "'>" .
                                "<img src='" . $peli->pelicula_portada . "' alt=''>" .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-footer">
                            <?= $peli->pelicula_anio?>
                        </div>                    
                    </div>

                <?php    
                    }

                ?>

            </div>
        </div>
    </div><!--./películas de terror-->

    <!--.películas de suspenso-->
    <div class="panel panel-info">
        <div class="panel-heading">
            Películas de suspenso
        </div>

        <div class="container-fluid">
            <div class="row">
                
                <?php
                    foreach ($suspenso as $peli) {
                ?>

                    <div class='col-lg-2 col-md-3 col-sm-4 col-xs-12 panel-primary'>
                        <div class="panel-heading" style="white-space: nowrap;">
                            <?= "<a style='color:white !important' href='index.php?r=site/video&m=" . 
                                $peli->pelicula_id .
                            "'>" .
                                $peli->pelicula_titulo .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-body panel-body-peli">
                            <?= "<a href='index.php?r=site/video&m=" . 
                                //str_replace(" ", "", $peli->pelicula_titulo) .
                                $peli->pelicula_id .
                            "'>" .
                                "<img src='" . $peli->pelicula_portada . "' alt=''>" .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-footer">
                            <?= $peli->pelicula_anio?>
                        </div>                    
                    </div>

                <?php    
                    }

                ?>

            </div>
        </div>
    </div><!--./películas de suspenso-->

    <!--.películas de drama-->
    <div class="panel panel-info">
        <div class="panel-heading">
            Películas de drama
        </div>

        <div class="container-fluid">
            <div class="row" style="overflow-y: scroll; display: flex;">
                
                <?php
                    foreach ($drama as $peli) {
                ?>

                    <div class='col-lg-2 col-md-3 col-sm-4 col-xs-12 panel-primary' style="min-width: 180px">
                        <div class="panel-heading" style="white-space: nowrap;">
                            <?= "<a style='color:white !important' href='index.php?r=site/video&m=" . 
                                $peli->pelicula_id .
                            "'>" .
                                $peli->pelicula_titulo .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-body panel-body-peli">
                            <?= "<a href='index.php?r=site/video&m=" . 
                                //str_replace(" ", "", $peli->pelicula_titulo) .
                                $peli->pelicula_id .
                            "'>" .
                                "<img src='" . $peli->pelicula_portada . "' alt=''>" .
                            "</a>"
                            ?>
                        </div>
                        <div class="panel-footer">
                            <?= $peli->pelicula_anio?>
                        </div>                    
                    </div>

                <?php    
                    }

                ?>

            </div>
        </div>
    </div><!--./películas de drama-->



</div>