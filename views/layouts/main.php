<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $profile /app/models/Profile */

use app\assets\PublicAsset;
use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>
<div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
</div>
<!-- START HEADER -->
<header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
        <nav class="cyan">

            <div class="nav-wrapper">
                <h1 class="logo-wrapper"><a href="<?=Yii::$app->homeUrl ?>" class="brand-logo"></a></h1>
<!--                <h1 class="logo-wrapper"><a href="#" class="brand-logo"><span class="logo-text">Materialize</span></a></h1>-->
                <a href="<?=Yii::$app->homeUrl ?>" class="brand-logo">
                    <img src="/web/images/online.png" alt="online logo">
                </a>
            </div>
        </nav>
    </div>
</header>

<?php if($this->render('/parts/sidebar')):?>
<div id="main">
    <div class="wrapper">
        <section id="content">
            <div class="container">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= $content ?>
            </div>
        </section>
    </div>
</div>
<?php else: ?>
        <div class="wrapper">
            <section id="content">
                <div class="container">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= $content ?>
                </div>
            </section>
<?php endif; ?>
<!--<div id="main">-->
<!--    <div class="wrapper">-->
<!--        <section id="content">-->
<!--            <div class="container">-->
<!--                --><?//= Breadcrumbs::widget([
//                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
//                ]) ?>
<!--                --><?//= $content ?>
<!--            </div>-->
<!--        </section>-->
<!--    </div>-->
<!--</div>-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>