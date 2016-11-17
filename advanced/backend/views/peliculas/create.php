<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Peliculas */

$this->title = 'Alta Películas';
$this->params['breadcrumbs'][] = ['label' => 'Peliculas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="peliculas-create">

    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'actor' => $actor,
        'director' => $director,
    ]) ?>

</div>
