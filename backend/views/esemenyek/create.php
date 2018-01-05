<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\esemenyek */

$this->title = 'Új Esemény létrehozása';
$this->params['breadcrumbs'][] = ['label' => 'Esemenyék', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esemenyek-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>