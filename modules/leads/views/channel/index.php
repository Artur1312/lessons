<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\leads\models\LeadChannelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lead Channels';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lead-channel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lead Channel', ['create'], ['class' => 'btn waves-effect waves-light  cyan darken-2']) ?>

<!--        --><?//= Html::button('Create Channel', ['value'=>Url::to('create'), 'class' => 'btn btn-success', 'id'=>'modalButton']); ?>
    </p>

<!--    --><?php
//    Modal::begin([
//        'header'=>'<h4>Add a channel</h4>',
//        'id'=>'modal',
//        'size'=>'modal-lg',
//    ]);
//
//    echo "<div id='modalContent'></div>";
//
//    Modal::end();
//
//    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
