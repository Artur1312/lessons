<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TutorType */

$this->title = Yii::t('app', 'Create Tutor Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Tutor Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tutor-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
