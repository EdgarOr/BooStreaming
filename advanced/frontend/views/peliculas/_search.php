<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PeliculasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peliculas-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pelicula_id') ?>

    <?= $form->field($model, 'pelicula_titulo') ?>

    <?= $form->field($model, 'pelicula_sinopsis') ?>

    <?= $form->field($model, 'pelicula_ranking') ?>

    <?= $form->field($model, 'pelicula_duracion') ?>

    <?php // echo $form->field($model, 'pelicula_clasificacion') ?>

    <?php // echo $form->field($model, 'pelicula_anio') ?>

    <?php // echo $form->field($model, 'pelicula_fechaAlta') ?>

    <?php // echo $form->field($model, 'pelicula_url') ?>

    <?php // echo $form->field($model, 'pelicula_portada') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
