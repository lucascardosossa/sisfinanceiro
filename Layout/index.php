<?php
/**
 * Created by PhpStorm.
 * User: lcslabs
 * Date: 20/07/17
 * Time: 21:02
 */


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SIS Financeiro </title>

    <!-- Bootstrap -->
    <link href="<?= $dir_template ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= $dir_template ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= $dir_template ?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= $dir_template ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?= $dir_template ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"
          rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= $dir_template ?>vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= $dir_template ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= $dir_template ?>build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>SIS Financeiro</span></a>
                </div>

                <div class="clearfix"></div>

                <!-- menu profile quick info -->
                <div class="profile clearfix">
                    <div class="profile_pic">
                        <img src="<?= $dir_template ?>/production/images/img.jpg" alt="..."
                             class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                        <span>Welcome,</span>
                        <h2>John Doe</h2>
                    </div>
                </div>
                <!-- /menu profile quick info -->

                <br/>

                <!-- sidebar menu -->
                <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <h3>General</h3>
                        <ul class="nav side-menu">
                            <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.html">Dashboard</a></li>
                                    <li><a href="index2.html">Dashboard2</a></li>
                                    <li><a href="index3.html">Dashboard3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->

                <!-- /menu footer buttons -->
                <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                        <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                        <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                        <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
                </div>
                <!-- /menu footer buttons -->
            </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
            <div class="nav_menu">
                <nav>
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="">
                            <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                               aria-expanded="false">
                                <img src="<?= $dir_template ?>/production/images/img.jpg" alt="">John Doe
                                <span class=" fa fa-angle-down"></span>
                            </a>
                            <ul class="dropdown-menu dropdown-usermenu pull-right">
                                <li><a href="javascript:;"> Profile</a></li>
                                <li>
                                    <a href="javascript:;">
                                        <span class="badge bg-red pull-right">50%</span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li><a href="javascript:;">Help</a></li>
                                <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?= $content ?>
            <!-- top tiles -->
            <!--            <div class="row tile_count">-->
            <!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
            <!--                    <span class="count_top"><i class="fa fa-user"></i> Total Users</span>-->
            <!--                    <div class="count">2500</div>-->
            <!--                    <span class="count_bottom"><i class="green">4% </i> From last Week</span>-->
            <!--                </div>-->
            <!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
            <!--                    <span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>-->
            <!--                    <div class="count">123.50</div>-->
            <!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>-->
            <!--                </div>-->
            <!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
            <!--                    <span class="count_top"><i class="fa fa-user"></i> Total Males</span>-->
            <!--                    <div class="count green">2,500</div>-->
            <!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            <!--                </div>-->
            <!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
            <!--                    <span class="count_top"><i class="fa fa-user"></i> Total Females</span>-->
            <!--                    <div class="count">4,567</div>-->
            <!--                    <span class="count_bottom"><i class="red"><i class="fa fa-sort-desc"></i>12% </i> From last Week</span>-->
            <!--                </div>-->
            <!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
            <!--                    <span class="count_top"><i class="fa fa-user"></i> Total Collections</span>-->
            <!--                    <div class="count">2,315</div>-->
            <!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            <!--                </div>-->
            <!--                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">-->
            <!--                    <span class="count_top"><i class="fa fa-user"></i> Total Connections</span>-->
            <!--                    <div class="count">7,325</div>-->
            <!--                    <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>-->
            <!--                </div>-->
            <!--            </div>-->
            <!-- /top tiles -->

            <!--            <div class="row">-->
            <!--                <div class="col-md-12 col-sm-12 col-xs-12">-->
            <!--                    <div class="dashboard_graph">-->
            <!---->
            <!--                        <div class="row x_title">-->
            <!--                            <div class="col-md-6">-->
            <!--                                <h3>Network Activities <small>Graph title sub-title</small></h3>-->
            <!--                            </div>-->
            <!--                            <div class="col-md-6">-->
            <!--                                <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">-->
            <!--                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>-->
            <!--                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->
            <!---->
            <!--                        <div class="col-md-9 col-sm-9 col-xs-12">-->
            <!--                            <div id="chart_plot_01" class="demo-placeholder"></div>-->
            <!--                        </div>-->
            <!--                        <div class="col-md-3 col-sm-3 col-xs-12 bg-white">-->
            <!--                            <div class="x_title">-->
            <!--                                <h2>Top Campaign Performance</h2>-->
            <!--                                <div class="clearfix"></div>-->
            <!--                            </div>-->
            <!---->
            <!--                            <div class="col-md-12 col-sm-12 col-xs-6">-->
            <!--                                <div>-->
            <!--                                    <p>Facebook Campaign</p>-->
            <!--                                    <div class="">-->
            <!--                                        <div class="progress progress_sm" style="width: 76%;">-->
            <!--                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div>-->
            <!--                                    <p>Twitter Campaign</p>-->
            <!--                                    <div class="">-->
            <!--                                        <div class="progress progress_sm" style="width: 76%;">-->
            <!--                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                            <div class="col-md-12 col-sm-12 col-xs-6">-->
            <!--                                <div>-->
            <!--                                    <p>Conventional Media</p>-->
            <!--                                    <div class="">-->
            <!--                                        <div class="progress progress_sm" style="width: 76%;">-->
            <!--                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                                <div>-->
            <!--                                    <p>Bill boards</p>-->
            <!--                                    <div class="">-->
            <!--                                        <div class="progress progress_sm" style="width: 76%;">-->
            <!--                                            <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>-->
            <!--                                        </div>-->
            <!--                                    </div>-->
            <!--                                </div>-->
            <!--                            </div>-->
            <!---->
            <!--                        </div>-->
            <!---->
            <!--                        <div class="clearfix"></div>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!---->
            <!--            </div>-->
            <br/>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="<?= $dir_template ?>vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= $dir_template ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="<?= $dir_template ?>vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= $dir_template ?>vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="<?= $dir_template ?>vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="<?= $dir_template ?>vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="<?= $dir_template ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="<?= $dir_template ?>vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="<?= $dir_template ?>vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="<?= $dir_template ?>vendors/Flot/jquery.flot.js"></script>
<script src="<?= $dir_template ?>vendors/Flot/jquery.flot.pie.js"></script>
<script src="<?= $dir_template ?>vendors/Flot/jquery.flot.time.js"></script>
<script src="<?= $dir_template ?>vendors/Flot/jquery.flot.stack.js"></script>
<script src="<?= $dir_template ?>vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="<?= $dir_template ?>vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="<?= $dir_template ?>vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="<?= $dir_template ?>vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="<?= $dir_template ?>vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="<?= $dir_template ?>vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="<?= $dir_template ?>vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="<?= $dir_template ?>vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="<?= $dir_template ?>vendors/moment/min/moment.min.js"></script>
<script src="<?= $dir_template ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= $dir_template ?>build/js/custom.min.js"></script>

</body>
</html>

