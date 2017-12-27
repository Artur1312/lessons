<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\leads\models\LeadForm */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="lead-form-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn waves-effect waves-light  cyan darken-2' : 'btn waves-effect waves-light light-blue darken-4']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
