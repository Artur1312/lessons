<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\bootstrap\Modal;
use yii\widgets\Pjax;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\course\models\CourseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Courses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="course-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::button('Create Course', ['value'=>Url::to('/course/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']); ?>
    </p>

    <?php
                Modal::begin([
                        'header'=>'<h4>Add a course</h4>',
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
            'name',
            ['class' => 'yii\grid\ActionColumn',
            'buttons' => [
                'view' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['class' => 'view', 'data-pjax' => '0']);
                }
            ],
        ],
    ]
    ]);

//$this->registerJs(
//        "
//        $(function () {
//    $('#modalButton').click(function () {
//        $('#modal').modal('show')
//            .find('#modalContent')
//            .load($(this).attr('value'));
//    });
//});"
//);
    $this->registerJs(
        "$(document).on('ready pjax:success', function() {  // 'pjax:success' use if you have used pjax
    $('.view').click(function(e){
       e.preventDefault();
       $('#pModal').modal('show')
                  .find('.modal-content')
                  .load($(this).attr('href'));
   });
});
"
    );

    Modal::begin([
        'id'=>'pModal',
        'size'=>'modal-lg',
    ]);
    Modal::end();
    ?>
</div>
