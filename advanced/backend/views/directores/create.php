<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Directores */

$this->title = 'Create Directores';
$this->params['breadcrumbs'][] = ['label' => 'Directores', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directores-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
