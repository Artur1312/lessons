<?php
use yii\helpers\Url;
?>

<div class="sidebar" data-image="<?=Url::to(['/web/img/sidebar-2.jpg'])?>">
    <!--
Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

Tip 2: you can also add an image using data-image tag
-->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="<?=Yii::$app->homeUrl ?>" class="simple-text">
               <img src="<?=Url::to(['/web/img/logo.png'])?>">
            </a>
        </div>
        <ul class="nav">
            <?php if(!Yii::$app->user->isGuest):?>
            <li class="nav-item active">
                <a class="nav-link active" href="<?= Url::toRoute(['/profile/view','id'=>Yii::$app->user->identity->id]);?>">
                    <i class="nc-icon nc-alien-33"></i>
                    <p><?=Yii::$app->user->identity->username?>'s Profile</p>
                </a>
            </li>
            <?php else: ?>
            <?php endif; ?>
            <li>
                <a class="nav-link" href="<?=  Url::toRoute(['/leads/info/index'])?>">
                    <i class="nc-icon nc-chart-pie-35"></i>
                    <p>Lead Info</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?=  Url::toRoute(['/orders/info/index'])?>">
                    <i class="nc-icon nc-circle-09"></i>
                    <p>Order Info</p>
                </a>
            </li>
            <li class="dropdown">
                <a class="nav-link" href="<?=  Url::toRoute(['/product/index'])?>">
                    <i class="nc-icon nc-notes"></i>
                    <p>Product</p>
                </a>
                <ul class="dropdown-menu">

                    <li><a href="<?=  Url::toRoute(['/promocode/action/index'])?>">Actions</a></li>
                    <li><a href="<?=  Url::toRoute(['/wallet/bank/index'])?>">Banks</a></li>
                    <li><a href="<?=  Url::toRoute(['/wallet/currency/index'])?>">Currency</a></li>
                    <li><a href="<?=  Url::toRoute(['/course/index'])?>">Courses</a></li>
                    <li><a href="<?=  Url::toRoute(['/payment/type/index'])?>">Payment Type</a></li>
                    <li><a href="<?=  Url::toRoute(['/payout/type/index'])?>">Payout Type</a></li>
                    <li><a href="<?=  Url::toRoute(['/product/index'])?>">Product</a></li>
                    <li><a href="<?=  Url::toRoute(['/tutors/type/index'])?>">Tutor Type</a></li>

                </ul>
            </li>
            <li>
                <a class="nav-link" href="<?= Url::toRoute(['/payout/type/index'])?>">
                    <i class="nc-icon nc-paper-2"></i>
                    <p>Payouts</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= Url::toRoute(['/payment/type/index'])?>">
                    <i class="nc-icon nc-atom"></i>
                    <p>Payments</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="<?= Url::toRoute(['/tutors/default/index'])?>">
                    <i class="nc-icon nc-pin-3"></i>
                    <p>Tutors</p>
                </a>
            </li>
            <li>
                <a class="nav-link" href="./notifications.html">
                    <i class="nc-icon nc-bell-55"></i>
                    <p>Comments</p>
                </a>
            </li>
            <?php if(Yii::$app->user->isGuest):?>
                <li>


                    <a class="nav-link" href="<?= Url::toRoute(['auth/login'])?>">
                        <i class="nc-icon nc-bell-55"></i>Login
                    </a>

                </li>
                <li>

                    <a class="nav-link" href="<?= Url::toRoute(['signup/index'])?>">
                        <i class="nc-icon nc-bell-55"></i>
                        Register
                    </a>

                </li>
                <li class="nav-item active active-pro">
                    <a class="nav-link active">
                        <i class="nc-icon nc-alien-33"></i>
                        <p>Status: Guest</p>
                    </a>
                </li>
            <?php else: ?>
                <li class="nav-item active active-pro">
                    <a class="nav-link active" href="<?= Url::toRoute(['auth/logout'])?>">
                        <i class="nc-icon nc-alien-33"></i>
                        <p>Log out(<?=Yii::$app->user->identity->username?>)</p>
                    </a>
                </li>
            <?php endif; ?>


        </ul>
    </div>
</div>

<!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->

