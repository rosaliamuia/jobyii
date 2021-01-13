<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Signup';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    

                <div class="text-center mb-2">
                    <img class="mb-1" src="../images/logoc2.png" alt="" width="200" height="200">
                    <h1 class="h3 mb-3 font-weight-normal"><?= Html::encode($this->title) ?></h1>
                    <p class="fx">If you already have an account sign in</p>
                </div>

   
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>
                <div class="form-group">
                <label for="txt" class="font-weight-bold mb-2">Names</label>
                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
                </div>
              

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group d-flex justify-content-center">
                    <?= Html::submitButton('Signup', ['class' => 'btn btn-info btn-lg', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
       
</div>
