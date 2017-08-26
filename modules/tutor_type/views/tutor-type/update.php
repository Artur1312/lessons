<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\tutor_type\models\TutorType */

$this->title = 'Update Tutor Type: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Tutor Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tutor-type-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>