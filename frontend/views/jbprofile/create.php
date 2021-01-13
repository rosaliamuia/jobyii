<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jbprofile */

$this->title = Yii::t('app', 'Create Jbprofile');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jbprofiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="jbprofile-create">

   

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
