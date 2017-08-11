<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LeadLanding */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Lead Landing',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Lead Landings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="lead-landing-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
