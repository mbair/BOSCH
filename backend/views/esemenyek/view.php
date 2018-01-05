<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\esemenyek */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Új Események létrehozása', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esemenyek-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Bíztos törölni akarok az elemet?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'statusz',
            'helyszin',
            'csoportok',
            'temakorok',
            'hrl_munkatars',
            'Jelentkezokmaxszama',
            'megjegyzes',
        ],
    ]) ?>

</div>
