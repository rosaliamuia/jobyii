<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\JobPost;
use yii\helpers\ArrayHelper;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Savedjobs */
/* @var $form ActiveForm */
$shoes = JobPost::find()->all();
$shoe = ArrayHelper::map(JobPost::find()->all(), 'jobPostId', 'companyId');
$user_id = User::find()->where(['id'=>Yii::$app->user->id])->one();
?>
<div class="addtocart">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'jobPostId')->hiddenInput(['value' => $jobPostId, 'readonly'=> true])->label(false)  ?>
        <?= $form->field($model, 'date')->hiddenInput(['value'=>date('yy/m/d')])->label(false)  ?>
        <!-- <?= $form->field($model, 'status') ?> -->
    
        <div class="form-group">
            <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addtocart -->
