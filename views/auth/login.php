<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--<div class="leave-comment mr0"><!--leave comment-->
<!--    <div class="row">-->
<!--        <div class="col-md-12 col-md-offset-2">-->
<!--            <div class="site-login">-->
<!--                <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
<!---->
<!--                <p>Please fill out the following fields to login:</p>-->
<!---->
<!--                --><?php //$form = ActiveForm::begin([
//                    'id' => 'login-form',
//                    'layout' => 'horizontal',
//                    'fieldConfig' => [
//                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
//                        'labelOptions' => ['class' => 'col-lg-1 control-label'],
//                    ],
//                ]); ?>
<!---->
<!--                --><?//= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>
<!---->
<!--                --><?//= $form->field($model, 'password')->passwordInput() ?>
<!---->
<!--                --><?//= $form->field($model, 'rememberMe')->checkbox([
//                    'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
//                ]) ?>
<!---->
<!--                <div class="form-group">-->
<!--                    <div class="col-lg-offset-1 col-lg-11">-->
<!--                        --><?//= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                --><?php //ActiveForm::end(); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<div id="login-page" class="row">


    <div class="col s12 z-depth-4 card-panel">
            <div class="row">

                <?php $form = ActiveForm::begin([
                    'id' => 'login-form',
                    'layout' => 'horizontal',
                    'fieldConfig' => [
                        'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
                        'labelOptions' => ['class' => 'input-field col s12'],
                    ],
                ]); ?>

                <div class="input-field col s12 center">
                    <img src="/web/images/login-logo.png" alt="" class="circle responsive-img valign profile-image-login">
                    <p class="center login-form-text">Material Design Admin Template</p>
                </div>
            </div>
            <div class="row margin">

                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <?= $form->field($model, 'email')->input('email')->textInput(['autofocus' => true])->label('') ?>
                    <label for="email">Email</label>

                </div>

            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                </div>
            </div>
            <div class="row">
                    <?= $form->field($model, 'rememberMe')->checkbox([
                        'template' => "<div class=\"input-field col s12 m12 l12  login-text\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
                    ]) ?>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <?= Html::submitButton('Login', ['class' => 'btn waves-effect waves-light col s12', 'name' => 'login-button']) ?>
                </div>
            </div>
<!--            <div class="row">-->
<!--                <div class="input-field col s6 m6 l6">-->
<!--                    <p class="margin medium-small"><a href="page-register.html">Register Now!</a></p>-->
<!---->
<!--                </div>-->
<!--                <div class="input-field col s6 m6 l6">-->
<!--                    <p class="margin right-align medium-small"><a href="page-forgot-password.html">Forgot password ?</a></p>-->
<!--                </div>-->
<!--            </div>-->
        <?php ActiveForm::end(); ?>
    </div>
</div>
