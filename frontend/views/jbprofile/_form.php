<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jbprofile */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="container ct shadow-lg bg-white-rounded cl">

    <div class="jbprofile-form">
    <h4 class="text-center font-weight-bold fx2 mt-3">PROFILE</h4>
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'userId')->textInput() ?>

        <?= $form->field($model, 'fullName')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'phoneNumber')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'dateofBirth')->textInput() ?>

        <?= $form->field($model, 'gender')->dropDownList([ 'MALE' => 'MALE', 'FEMALE' => 'FEMALE', 'SELECT OTHER' => 'SELECT OTHER', '' => '', ], ['prompt' => '']) ?>

        <?= $form->field($model, 'image')->textInput(['maxlength' => true]) ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
