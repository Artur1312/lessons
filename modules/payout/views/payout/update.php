<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\payout\models\Payout */

$this->title = 'Update Payout: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Payouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="payout-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
