<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Directores */

$this->title = 'Update Directores: ' . $model->director_id;
$this->params['breadcrumbs'][] = ['label' => 'Directores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->director_id, 'url' => ['view', 'id' => $model->director_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="directores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
