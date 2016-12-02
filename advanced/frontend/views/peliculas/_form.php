<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Peliculas */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peliculas-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pelicula_titulo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelicula_sinopsis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pelicula_ranking')->textInput() ?>

    <?= $form->field($model, 'pelicula_duracion')->textInput() ?>

    <?= $form->field($model, 'pelicula_clasificacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelicula_anio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pelicula_fechaAlta')->textInput() ?>

    <?= $form->field($model, 'pelicula_url')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pelicula_portada')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
