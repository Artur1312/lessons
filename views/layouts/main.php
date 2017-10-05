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
                <h1 class="logo-wrapper"><a href="<?=Yii::$app->homeUrl ?>" class="brand-logo darken-1"></a> <span class="logo-text">Materialize</span></h1>
                <ul class="right hide-on-med-and-down">
                    <?php if(Yii::$app->user->isGuest):?>
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
                        <li><a href="<?= Url::toRoute(['auth/logout'])?>">Logout</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</header>
<div id="main">
    <div class="wrapper">
        <aside id="left-sidebar-nav">
            <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                    <div class="row">
                    <?php if(Yii::$app->user->isGuest):?>
                        <div class="col col s4 m4 l4">
                            <img src="/web/images/user-avatar.png" alt="" class="circle responsive-img valign profile-image">
                        </div>
                    <?php else: ?>
                        <div class="col col s4 m4 l4">
                            <img src="/web/images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                        </div>
                    <?php endif; ?>
                        <div class="col col s8 m8 l8">
                        <?php if(Yii::$app->user->isGuest):?>
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="<?= Url::toRoute(['auth/login'])?>"><i class="mdi-communication-vpn-key"></i>Login</a>
                                </li>
                                <li><a href="<?= Url::toRoute(['signup/index'])?>"><i class="mdi-maps-location-history"></i>Register</a>
                                </li>
                            </ul>
                        <?php else: ?>
                            <ul id="profile-dropdown" class="dropdown-content">
                                <li><a href="<?= Url::toRoute(['/profile/view','id'=>Yii::$app->user->identity->id]);?>"><i class="mdi-action-face-unlock"></i> Profile</a>
                                </li>
<!--                                <li><a href="#"><i class="mdi-action-settings"></i> Settings</a>-->
<!--                                </li>-->
<!--                                <li><a href="#"><i class="mdi-communication-live-help"></i> Help</a>-->
<!--                                </li>-->
<!--                            <li class="divider"></li>-->
<!--                                <li><a href="#"><i class="mdi-action-lock-outline"></i> Lock</a>-->
<!--                                </li>-->
                                <li><a href="<?= Url::toRoute(['auth/logout'])?>"><i class="mdi-hardware-keyboard-tab"></i>Logout</a>
                                </li>
                            </ul>
                    <?php endif; ?>
                    <?php if(Yii::$app->user->isGuest):?>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">Guest<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">User</p>
                    <?php else: ?>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?=Yii::$app->user->identity->username?><i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">Administrator</p>
                    <?php endif; ?>
<!--                            <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">--><?//=Yii::$app->user->identity->username?><!--<i class="mdi-navigation-arrow-drop-down right"></i></a>-->
<!--                            <p class="user-roal">Administrator</p>-->
                        </div>
                    </div>
                </li>
<!--                <li class="bold"><a href="index.html" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>-->
<!--                </li>-->
<!--                <li class="bold"><a href="app-email.html" class="waves-effect waves-cyan"><i class="mdi-communication-email"></i> Mailbox <span class="new badge">4</span></a>-->
<!--                </li>-->
<!--                <li class="bold"><a href="app-calendar.html" class="waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Calender</a>-->
<!--                </li>-->
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i>Orders</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="<?= Url::toRoute(['/orders/info/index'])?>">Info</a>
                                    </li>
                                    <li><a href="css-icons.html">Icons</a>
                                    </li>
                                    <li><a href="css-shadow.html">Shadow</a>
                                    </li>
                                    <li><a href="css-media.html">Media</a>
                                    </li>
                                    <li><a href="css-sass.html">Sass</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i> UI Elements</a>
                            <div class="collapsible-body">
<!--                                <ul>-->
<!--                                    <li><a href="ui-buttons.html">Buttons</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-badges.html">Badges</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-cards.html">Cards</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-collections.html">Collections</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-accordions.html">Accordian</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-navbar.html">Navbar</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-pagination.html">Pagination</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-preloader.html">Preloader</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-modals.html">Modals</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-media.html">Media</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-toasts.html">Toasts</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="ui-tooltip.html">Tooltip</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </div>
                        </li>
                        <li class="bold"><a href="app-widget.html" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Widgets <span class="new badge"></span></a>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i> Tables</a>
                            <div class="collapsible-body">
<!--                                <ul>-->
<!--                                    <li><a href="table-basic.html">Basic Tables</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="table-data.html">Data Tables</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Forms</a>
                            <div class="collapsible-body">
<!--                                <ul>-->
<!--                                    <li><a href="form-elements.html">Form Elements</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="form-layouts.html">Form Layouts</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-social-pages"></i> Pages</a>
                            <div class="collapsible-body">
<!--                                <ul>-->
<!--                                    <li><a href="page-login.html">Login</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="page-register.html">Register</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="page-lock-screen.html">Lock Screen</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="page-invoice.html">Invoice</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="page-404.html">404</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="page-500.html">500</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="page-blank.html">Blank</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </div>
                        </li>
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Charts</a>
                            <div class="collapsible-body">
<!--                                <ul>-->
<!--                                    <li><a href="charts-chartjs.html">Chart JS</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="charts-chartist.html">Chartist</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="charts-morris.html">Morris Charts</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="charts-xcharts.html">xCharts</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="charts-flotcharts.html">Flot Charts</a>-->
<!--                                    </li>-->
<!--                                    <li><a href="charts-sparklines.html">Sparkline Charts</a>-->
<!--                                    </li>-->
<!--                                </ul>-->
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">MORE</p></li>
<!--                <li><a href="css-grid.html"><i class="mdi-image-grid-on"></i> Grid</a>-->
<!--                </li>-->
<!--                <li><a href="css-color.html"><i class="mdi-editor-format-color-fill"></i> Color</a>-->
<!--                </li>-->
<!--                <li><a href="css-helpers.html"><i class="mdi-communication-live-help"></i> Helpers</a>-->
<!--                </li>-->
<!--                <li><a href="changelogs.html"><i class="mdi-action-swap-vert-circle"></i> Changelogs</a>-->
<!--                </li>-->
                <li class="li-hover"><div class="divider"></div></li>
                <li class="li-hover"><p class="ultra-small margin more-text">Daily Sales</p></li>
            </ul>
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="mdi-navigation-menu" ></i></a>
        </aside>
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
<!--<footer class="page-footer">-->
<!--    <div class="footer-copyright">-->
<!--        <div class="container">-->
<!--            Copyright © 2015 <a class="grey-text text-lighten-4" href="http://themeforest.net/user/geekslabs/portfolio?ref=geekslabs" target="_blank">GeeksLabs</a> All rights reserved.-->
<!--            <span class="right"> Design and Developed by <a class="grey-text text-lighten-4" href="http://geekslabs.com/">GeeksLabs</a></span>-->
<!--        </div>-->
<!--    </div>-->
<!--</footer>-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>