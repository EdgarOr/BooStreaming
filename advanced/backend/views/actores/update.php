<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Actores */

$this->title = 'Update Actores: ' . $model->actor_id;
$this->params['breadcrumbs'][] = ['label' => 'Actores', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->actor_id, 'url' => ['view', 'id' => $model->actor_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="actores-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
