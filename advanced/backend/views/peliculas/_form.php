<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\Actores;
use backend\models\Directores;
use kartik\select2\Select2;

/* @var $this yii\web\View */
/* @var $model backend\models\Peliculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peliculas-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row ">
        <div class="form-group text-right">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>

    <div class="row" >

    </div>

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-md-4">
            <?= $form->field($model, 'pelicula_titulo')->textInput(['maxlength' => true, 
                                                                    'placeholder' => 'Inserte el título de la película']) ?> 

            <?= $form->field($model, 'pelicula_sinopsis')->textarea(['rows' => 4, 
                                                                    'placeholder' => 'Inserte la sinopsis de la película']) ?>
            <!--?= $form->field($model, 'pelicula_ranking')->textInput() ?-->
        </div>
        <div class="col-md-3">
            
            <?= $form->field($model, 'pelicula_clasificacion')->dropDownList([ 
                'G' => 'G - Todos los públicos', 
                'PG' => 'PG - Guía paternal sugerida', 
                'PG-13' => 'PG-13 - Guía paternal estricta',
                'R' => 'R - Restringido',
                'NC-17' => 'NC-17 - Prohibido para audiencia de 17 años o menos',
                ], ['prompt' => 'Seleccione una clasificación']) ?>

             <?= $form->field($model, 'pelicula_duracion')
                                    ->input('number', ['placeholder' =>'En minutos. P.e.: 1:30 h = 90 min', 'min'=>30])
                                     ?>

              <?= $form->field($model, 'pelicula_anio')->input('number', ['value' => date('Y'), 'min' => 1888]) ?>
        </div>
        <div class="col-md-1">
            <?= $form->field($model, 'portadaUrl')->fileInput(); ?>
            <?= $form->field($model, 'peliculaUrl')->fileInput(); ?>              
        </div>   
    </div>

    <div class="row">
        <div class="col-md-6 div-actores" >
            <h2 class="text-center">Añadir actores</h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">         
                <?= $form->field($actor, 'actores')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(Actores::find()->all(), 
                                                            'actor_id', 'actor_nombre'),
                                'language' => 'en',
                                'options' => ['placeholder' => 'Seleccione un actor', 
                                                'id' =>'actor_id', 
                                                'multiple' =>true],
                                'pluginOptions' => [
                                    'allowClear' => true,
                                    
                                ],
                ]) ?>
                 <?= $form->field($actor, 'actor_nombre')->textInput(['maxlength' => true, 
                                                            'placeholder' => 'Inserte el nombre del actor']) ?>
            </div>            
        </div>

        <div class="col-md-6" >
             <h2 class="text-center">Añadir directores</h2>
            <div class="col-md-2"></div>
            <div class="col-md-8">         
                <?= $form->field($director, 'directores')->widget(Select2::classname(), [
                                'data' => ArrayHelper::map(Directores::find()->all(), 
                                                            'director_id', 'director_nombre'),
                                'language' => 'en',
                                'options' => ['placeholder' => 'Seleccione un director', 
                                                'id' =>'director_id', 
                                                'multiple' =>true],
                                'pluginOptions' => [
                                    'allowClear' => true,
                                    
                                ],
                ]) ?>
                 <?= $form->field($director, 'director_nombre')->textInput(['maxlength' => true, 
                                                            'placeholder' => 'Inserte el nombre del director']) ?>
            </div>            

        </div>


    </div>   
    
    <?php ActiveForm::end(); ?>

</div>
