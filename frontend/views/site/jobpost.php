<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jobpost */
/* @var $form ActiveForm */
?>
<div class="container ct shadow-lg bg-white-rounded cl">
    <div class="jobpost">
    <h4 class="text-center font-weight-bold fx2 mt-3">POST JOB</h4>
        <?php $form = ActiveForm::begin(); ?>
            <div class="row">
                <div class="col-md-6 mb-3 mt-2">
                    <h6 class="font-weight-bold">JOB TITLE</h6>
                        <?= $form->field($model, 'jobTitle')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class="font-weight-bold">EMAIL</h6>
                    <?= $form->field($model, 'emailAddress')->label(false) ?> 
                </div>

                <div class="col-md-12 mb-3 mt-2">
                    <h6 class="font-weight-bold ">JOB TAGS</h6>
                    <?= $form->field($model, 'jobTag')->label(false) ?> 
                </div>

                <div class="col-md-12 mb-3 mt-2">
                    <h6 class="font-weight-bold ">STATUS</h6>
                    <?= $form->field($model, 'status')->label(false) ?> 
                </div>

                <div class="col-md-12 mb-3 mt-2">
                    <h6 class="font-weight-bold">JOB TYPE</h6>
                    <?= $form->field($model, 'jobcatId')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class="font-weight-bold">SKILLS</h6>
                    <?= $form->field($model, 'skillsId')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class="font-weight-bold ">EXPERIENCE</h6>
                    <?= $form->field($model, 'years')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class="font-weight-bold">REGION</h6>
                    <?= $form->field($model, 'region')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class=" font-weight-bold ">LOCATION</h6>
                    <?= $form->field($model, 'locationId')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class="font-weight-bold">START DATE</label>
                    <?= $form->field($model, 'startDate')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class=" font-weight-bold ">END DATE</h6>
                    <?= $form->field($model, 'endDate')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class=" font-weight-bold ">MINIMUM SALARY</h6>
                    <?= $form->field($model, 'minSalary')->label(false) ?> 
                </div>

                <div class="col-md-6 mb-3 mt-2">
                    <h6 class=" font-weight-bold ">MAXIMUM SALARY</h6>
                    <?= $form->field($model, 'maxSalary')->label(false) ?> 
                </div>

                

               

                <!-- <div class="col-md-6 mb-3 mt-2">
                    <label class="form-label font-weight-bold fts">Region</label>
                    <?= $form->field($model, 'locationId')->label(false) ?> 
                </div> -->

                <div class="col-md-12 mb-3 mt-2">
                    <h6 class="font-weight-bold ">IMAGE</h6>
                    <?= $form->field($model, 'image')->fileInput() ?> 
                </div>

                <div class="col-md-12 mb-3 mt-2">
                    <h6 class=" font-weight-bold ">JOB DESCRIPTION</label>
                    <?= $form->field($model, 'jobDesc')->label(false) ?> 
                </div>
            
                <div class="form-group d-flex justify-content-center">
                    <?= Html::submitButton(Yii::t('app', 'Submit'), ['class' => 'btn btn-info']) ?>
                </div>
            </div>
            <?php ActiveForm::end(); ?>

    </div><!-- jobpost -->
</div>
