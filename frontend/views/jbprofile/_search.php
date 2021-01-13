<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\JbprofileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="jbprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'profileId') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'fullName') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phoneNumber') ?>

    <?php // echo $form->field($model, 'dateofBirth') ?>

    <?php // echo $form->field($model, 'gender') ?>

    <?php // echo $form->field($model, 'image') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
