<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Actores */

$this->title = 'Create Actores';
$this->params['breadcrumbs'][] = ['label' => 'Actores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="actores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
