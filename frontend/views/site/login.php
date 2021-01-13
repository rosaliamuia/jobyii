<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1></h1>

            <div class="text-center mb-4">
                <img class="mb-1" src="../images/logoc2.png" alt="" width="200" height="200">
                <h1 class="h3 mb-3 font-weight-normal"><?= Html::encode($this->title) ?></h1>
                <p class="fx">If you don't have an account already &nbsp; <a href="signup.html"> sign up here</a></p>
            </div>

  
 
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <div class="form-group mt-2">
                    <label class="font-weight-bold">Username</label>
                    <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label(false) ?>
                </div>
                <div class="form-group mt-2">
                    <label class="font-weight-bold">Password</label>
                    <?= $form->field($model, 'password')->passwordInput()->label(false) ?>
                </div>
                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div style="color:#999;margin:1em 0" class="font-weight-bold">
                    If you forgot your password you can <?= Html::a('reset it', ['site/request-password-reset']) ?>.
                    <br>
                    Need new verification email? <?= Html::a('Resend', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group d-flex justify-content-center">
                    <?= Html::submitButton('Login', ['class' => 'btn btn-info btn-lg', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>


</div>
