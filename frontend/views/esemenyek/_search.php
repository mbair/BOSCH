<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\esemenyekSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="esemenyek-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'statusz') ?>

    <?= $form->field($model, 'helyszin') ?>

    <?= $form->field($model, 'csoportok') ?>

    <?= $form->field($model, 'temakorok') ?>

    <?php // echo $form->field($model, 'hrl_munkatars') ?>

    <?php // echo $form->field($model, 'Jelentkezokmaxszama') ?>

    <?php // echo $form->field($model, 'megjegyzes') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
