<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Savedjobs */
/* @var $form ActiveForm */
?>
<div class="apply">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'jobPostId') ?>
        <?= $form->field($model, 'date') ?>
        <?= $form->field($model, 'status') ?>
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- apply -->
