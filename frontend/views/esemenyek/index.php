<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\esemenyekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Események';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="esemenyek-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Új Esemény létrehozása', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'statusz',
            'helyszin',
            'csoportok',
            'temakorok',
            // 'hrl_munkatars',
            // 'Jelentkezokmaxszama',
            // 'megjegyzes:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
