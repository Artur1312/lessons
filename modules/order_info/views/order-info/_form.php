<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\order_info\models\OrderInfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-info-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'client_id')->textInput() ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'current_level')->textInput() ?>

    <?= $form->field($model, 'course_id')->textInput() ?>

    <?= $form->field($model, 'tutor_type_id')->textInput() ?>

    <?= $form->field($model, 'tutor_experience')->textInput() ?>

    <?= $form->field($model, 'connect_method')->textInput() ?>

    <?= $form->field($model, 'connect_time')->textInput() ?>

    <?= $form->field($model, 'frequence')->textInput() ?>

    <?= $form->field($model, 'free_days')->textInput() ?>

    <?= $form->field($model, 'free_times')->textInput() ?>

    <?= $form->field($model, 'goal')->textInput() ?>

    <?= $form->field($model, 'demo_total')->textInput() ?>

    <?= $form->field($model, 'demo_like')->textInput() ?>

    <?= $form->field($model, 'demo_dislike')->textInput() ?>

    <?= $form->field($model, 'demo_absent')->textInput() ?>

    <?= $form->field($model, 'demo_reject')->textInput() ?>

    <?= $form->field($model, 'order_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_comment')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
