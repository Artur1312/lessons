<?php

use yii\helpers\Html;
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
        <?= Html::a('Create Course', ['create'], ['class' => 'btn waves-effect waves-light  cyan darken-2']) ?>
<!--        --><?//= Html::button('Create Course', ['value'=>Url::to('/course/create'), 'class' => 'btn btn-success', 'id'=>'modalButton']); ?>
    </p>

<!--    --><?//= GridView::widget([
    //        'dataProvider' => $dataProvider,
    //        'filterModel' => $searchModel,
    //        'columns' => [
    //            ['class' => 'yii\grid\SerialColumn'],
    //            'name',
    //            ['class' => 'yii\grid\ActionColumn',
    //            'buttons' => [
    //                'view' => function ($url, $model) {
    //                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, ['class' => 'view', 'data-pjax' => '0']);
    //                }
    //            ],
    //        ],
    //    ]
    //    ]);
    //?>


    <?php if(!empty($courses)): ?>
    <?php foreach($courses as $course):?>
    <?php if($course->isRemoved()): ?>
        <table class="table">
            <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Actions</td>
            </tr>
            </thead>
        <?php endif; ?>
        <?php endforeach; ?>
            <tbody>
                <?php if($course->isRemoved()):?>
                    <tr>
                        <td><?= $course->id?></td>
                        <td><?= $course->name?></td>

                        <td>
                            <a href="<?= Url::toRoute(['course/view','id'=>$course->id]);?>" title="View" aria-label="View"><span class="mdi-action-visibility"></span></a>
                            <a href="<?= Url::toRoute(['course/update','id'=>$course->id]);?>" title="Update" aria-label="Update"><span class="mdi-content-create"></span></a>
                            <a href="<?= Url::toRoute(['course/delete','id'=>$course->id]);?>" title="Delete" aria-label="Delete" data-confirm="Are you sure you want to delete this item?" data-method="post"><span class="mdi-content-clear"></span></a>
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    <?php endif;?>


</div>
