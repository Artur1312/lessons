<?php use yii\widgets\ActiveForm;  ?>


    <h4>3 comments</h4>

<?php


if(!empty($comments)): ?>
    <?php foreach($comments as $comment):?>
        <div class="media">


            <div class="comment-img">
<!--              <img width="70px" class="img-circle" src="--><?//= //$comment->user->image; ?><!--" alt="">-->
            </div>

            <div class="comment-text">

                <h5><?= $comment->user->username; ?></h5>

                <p class="comment-date">
                    <?=$comment->created_at; ?>
                </p>


                <p class="para"><?=$comment->text; ?></p>
            </div>
        </div>
        <!-- end bottom comment-->
    <?php endforeach; ?>

<?php endif;?>
<?php if(!Yii::$app->user->isGuest):?>
    <div class="leave-comment">

        <?php $form = ActiveForm::begin([
            'action'=>['profile/comment', 'id'=>$profile->id],
            'options'=>['class'=>'form-horizontal contact-form', 'role'=>'form']
        ])?>
        <div class="form-group">
            <h4>Оставьте комментарий: </h4>
            <div class="col-md-12">
                <?= $form->field($commentForm, 'comment')->textarea(['class'=>'form-control','placeholder'=>'Write Message', 'rows'=>'6'])->label(false) ?>
            </div>
            <button type="submit" class="btn send-btn">Post Comment</button>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
<?php endif; ?>


