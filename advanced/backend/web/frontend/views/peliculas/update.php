<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Peliculas */

$this->title = 'Update Peliculas: ' . $model->pelicula_id;
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pelicula_id, 'url' => ['view', 'id' => $model->pelicula_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peliculas-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
