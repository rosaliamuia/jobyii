<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Jbprofile */

$this->title = Yii::t('app', 'Update Jbprofile: {name}', [
    'name' => $model->profileId,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Jbprofiles'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->profileId, 'url' => ['view', 'id' => $model->profileId]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="jbprofile-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
