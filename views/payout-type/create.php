<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PayoutType */

$this->title = Yii::t('app', 'Create Payout Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Payout Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="payout-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
