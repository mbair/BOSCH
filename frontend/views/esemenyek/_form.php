<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\esemenyek */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="esemenyek-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'statusz')->dropDownList([ 'Folglalható' => 'Folglalható', 'Nemfoglalható' => 'Nemfoglalható', ], ['prompt' => 'Válassz Stáuszt!']) ?>

    <?= $form->field($model, 'helyszin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'csoportok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'temakorok')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hrl_munkatars')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Jelentkezokmaxszama')->textInput() ?>

    <?= $form->field($model, 'megjegyzes')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
