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
                    <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>SIS Financeiro</span></a>
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
                            <li><a><i class="fa fa-home"></i> Contas a Pagar <span
                                            class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.php?action=ctpagar">Visualizar</a></li>
                                    <li><a href="index.php?action=new_ctpagar">Criar</a></li>
                                </ul>
                            </li>
                            <li><a><i class="fa fa-home"></i> Contas a Receber <span class="fa fa-chevron-down"></span></a>
                                <ul class="nav child_menu">
                                    <li><a href="index.php?action=ctreceber">Visualizar</a></li>
                                    <li><a href="index.php?action=new_ctreceber">Criar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- /sidebar menu -->
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
<script src="<?= $dir_template ?>vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>

<!-- Custom Theme Scripts -->
<script src="<?= $dir_template ?>build/js/custom.min.js"></script>
<script>
    $(document).ready(function () {
        $(".money").inputmask('decimal', {
            'alias': 'numeric',
            'groupSeparator': '.',
            'autoGroup': true,
            'digits': 2,
            'radixPoint': ",",
            'digitsOptional': false,
            'allowMinus': false,
            //'prefix': 'R$ ',
            'placeholder': '',
            'decimal': ",",
            'thousands': ".",
            'rightAlign': false,
            'clearMaskOnLostFocus': true
        });
    });
</script>
</body>
</html>

