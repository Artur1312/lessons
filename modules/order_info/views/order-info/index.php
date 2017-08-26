<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\order_info\models\OrderInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Info', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'create_time',
            'client_id',
            'product_id',
            'current_level',
            // 'course_id',
            // 'tutor_type_id',
            // 'tutor_experience',
            // 'connect_method',
            // 'connect_time:datetime',
            // 'frequence',
            // 'free_days',
            // 'free_times',
            // 'goal',
            // 'demo_total',
            // 'demo_like',
            // 'demo_dislike',
            // 'demo_absent',
            // 'demo_reject',
            // 'order_status',
            // 'order_comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
