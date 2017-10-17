<?php
use yii\helpers\Url;
?>

<aside id="left-sidebar-nav">
    <ul id="slide-out" class="side-nav fixed leftside-navigation">
        <li class="user-details cyan darken-2">
            <div class="row">
                <?php

                if(Yii::$app->user->isGuest):?>
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
            <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only darken-2"><i class="material-icons">menu</i></a>
            <ul class="collapsible collapsible-accordion">

                <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-action-invert-colors"></i>Orders</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= Url::toRoute(['/orders/info/index'])?>">Info</a>
                            </li>
                            <li><a href="<?= Url::toRoute(['/orders/status/index'])?>">Status</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-image-palette"></i>Leads</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= Url::toRoute(['/leads/info/index'])?>">Info</a>
                            </li>
                            <li><a href="<?= Url::toRoute(['/leads/form/index'])?>">Forms</a>
                            </li>
                            <li><a href="<?=  Url::toRoute(['/leads/channel/index'])?>">Chennels</a>
                            </li>
                            <li><a href="<?=  Url::toRoute(['/leads/leading/index'])?>">Leading</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="bold"><a href="<?=  Url::toRoute(['/course/index'])?>" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Courses</a>
                </li>
                <li class="bold"><a href="<?=  Url::toRoute(['/package/index'])?>" class="waves-effect waves-cyan"><i class="mdi-device-now-widgets"></i> Packages </a>
                </li>

                <!--                        <span class="new badge"></span>-->
                <li class="bold"><a class="collapsible-header  waves-effect waves-cyan"><i class="mdi-editor-border-all"></i>Wallets & Banks</a>
                    <div class="collapsible-body">
                        <ul>
                            <li><a href="<?= Url::toRoute(['/orders/bank/index'])?>">Banks</a>
                            </li>
                            <li><a href="<?= Url::toRoute(['/orders/wallet/index'])?>">Wallets</a>
                        </ul>
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

</aside>

<!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>-->

