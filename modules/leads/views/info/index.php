<?php

use yii\bootstrap\Modal;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\leads\models\LeadInfoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Lead Infos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lead-info-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Lead Info', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::button('Create Form', ['value'=>Url::to('/type/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']); ?>
    </p>

    <?php
    Modal::begin([
        'header'=>'<h4>Add a form</h4>',
        'id'=>'modal',
        'size'=>'modal-lg',
    ]);

    echo "<div id='modalContent'></div>";

    Modal::end();

    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'create_time',
            'client_id',
            'product_id',
            'lead_channel_id',
            // 'partner_id',
            // 'aff_id',
            // 'lead_landing_id',
            // 'lead_form_id',
            // 'source',
            // 'conv_url:url',
            // 'ga_cid',
            // 'utm_medium',
            // 'utm_term',
            // 'utm_content',
            // 'utm_campaign',
            // 'promocode_id',
            // 'count_orders',
            // 'count_sells',
            // 'total_lessons',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);

    Modal::begin([
        'id'=>'pModal',
        'size'=>'modal-lg',
    ]);
    Modal::end();
    ?>
</div>
