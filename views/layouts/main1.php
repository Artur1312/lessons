<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $profile /app/models/Profile */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="wrap">
    <nav class="navbar-inverse navbar-fixed-top navbar" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?=Yii::$app->homeUrl ?>">LessonShip</a>
            </div>
            <div id="w0-collapse" class="collapse navbar-collapse">
                <ul id="w1"class="navbar-nav navbar-right nav">

                    <?php if(Yii::$app->user->isGuest):?>
<!--                        <li><a href="--><?//=  Url::toRoute(['site/login'])?><!--">Login</a></li>-->

                        <li><a href="<?= Url::toRoute(['auth/login'])?>">Login</a></li>
                        <li><a href="<?= Url::toRoute(['signup/index'])?>">Register</a></li>
                    <?php else: ?>
                        <li><a href="<?= Yii::$app->homeUrl?>">Home</a></li>
                        <li><a href="<?= Url::toRoute(['site/about'])?>">About</a></li>
                        <li><a href="<?=  Url::toRoute(['site/contact'])?>">Contact</a></li>
                        <li><a href="<?=  Url::toRoute(['/leads/info/index'])?>">Lead Info</a></li>
                        <li><a href="<?=  Url::toRoute(['/orders/info/index'])?>">Order Info</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Tools
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">

                                <li><a href="<?=  Url::toRoute(['/promocode/action/index'])?>">Actions</a></li>
                                <li><a href="<?=  Url::toRoute(['/wallet/bank/index'])?>">Banks</a></li>
                                <li><a href="<?=  Url::toRoute(['/wallet/currency/index'])?>">Currency</a></li>
                                <li><a href="<?=  Url::toRoute(['/course/index'])?>">Courses</a></li>
                                <li><a href="<?=  Url::toRoute(['/leads/landing/index'])?>">Lead Landing</a></li>
                                <li><a href="<?=  Url::toRoute(['/leads/form/index'])?>">Lead Form</a></li>
                                <li><a href="<?=  Url::toRoute(['/leads/channel/index'])?>">Lead Channel</a></li>
                                <li><a href="<?=  Url::toRoute(['/payment/type/index'])?>">Payment Type</a></li>
                                <li><a href="<?=  Url::toRoute(['/payout/type/index'])?>">Payout Type</a></li>
                                <li><a href="<?=  Url::toRoute(['/product/index'])?>">Product</a></li>
                                <li><a href="<?=  Url::toRoute(['/tutors/type/index'])?>">Tutor Type</a></li>
                            </ul>
                        </li>
                        <li> <a href="<?= Url::toRoute(['/profile/view','id'=>Yii::$app->user->identity->id]);?>" title="View" aria-label="View"><span class="glyphicon glyphicon-eye-open"></span></a></li>
                        <li><a href="<?= Url::toRoute(['auth/logout'])?>">Logout(<?=Yii::$app->user->identity->username?>)</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>

    </nav>
<div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
</div>
</div>




<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
