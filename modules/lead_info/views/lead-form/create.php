<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\lead_info\models\LeadForm */

$this->title = 'Create Lead Form';
$this->params['breadcrumbs'][] = ['label' => 'Lead Forms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lead-form-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
