<?php
require_once 'core/init.php';
/**
 * Created by PhpStorm.
 * User: Athanassia Oikonomou
 * Date: 6/4/2017
 * Time: 1:02
 * Under construction...
 */

$user = new User();

if (!$user->isLoggedIn()) {
    header("Location:403.php");
}else{
    //Query for today's fields
    $connToday=DB::getInstance();
    $queryToday="SELECT * FROM `diabdata` WHERE DATE(`date`) = CURDATE()";
    $stmtToday=$connToday->query($queryToday);
    $todayRows=$stmtToday->count();
    $connToday=null;

    //Query for male
    $connMale=DB::getInstance();
    $queryMale="SELECT gender FROM `diabdata` WHERE `gender`='M' AND DATE(`date`)=CURDATE()";
    $stmtMale=$connMale->query($queryMale);
    $maleRows=$stmtMale->count();
    $connMale=null;

    //Query for female
    $connFemale=DB::getInstance();
    $queryFemale="SELECT gender FROM `diabdata` WHERE `gender`='F' AND DATE(`date`)=CURDATE()";
    $stmtFemale=$connFemale->query($queryFemale);
    $femaleRows=$stmtFemale->count();
    $connFemale=null;

    //Query for female
    $connAll=DB::getInstance();
    $queryAll="SELECT * FROM `diabdata`";
    $stmtAll=$connAll->query($queryAll);
    $allRows=$stmtAll->count();
    $connFemale=null;


}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dash-styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
    <script src="js/sb-admin-2.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/metisMenu.js"></script>
    <script src="js/metisMenu.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/maps/highmaps.js"></script>
    <script src="http://code.highcharts.com/maps/modules/map.js"></script>
    <script src="https://code.highcharts.com/maps/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/gr/gr-all.js"></script>


</head>

<body>
<div id="wrapper" class="">
    <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse"
                    aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Diabetes Risk Assessment Questionnaire Dashboard</a>
        </div>

        <ul class="nav navbar-nav navbar-top-links navbar-right">

            <li class="dropdown blue">
                <a class="dropdown-toggle blue" data-toggle="dropdown" href="#">
                    <i class="fa fa-user blue"></i> <i class="fa fa-caret-down blue"></i>
                    Hello <?php echo escape($user->data()->username); ?>
                </a>

                <ul class="dropdown-menu">
                    <li class="blue"><a href="logout.php"><span class="glyphicon glyphicon-log-out blue"></span> Log out</a>
                    </li>
                </ul>
            </li>

        </ul>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse collapse" id="navbar-collapse" aria-expanded="true">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="dashboard.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="dashboard.php?page=pie-charts.php">Pie Charts</a><!--Will change-->
                            </li>
                            <li>
                                <a href="#">Graph Charts</a><!--Will change-->
                            </li>
                            <li>
                                <a href="dashboard.php">Map Chart</a><!--Will change-->
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table fa-fw"></i> Tables</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit fa-fw"></i> Patient Files</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-wrench fa-fw"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Dashboard</a>
                            </li>
                            <li>
                                <a href="#">Profile</a>
                            </li>
                            <li>
                                <a href="#">Charts</a>
                            </li>
                            <li>
                                <a href="#">Database</a>
                            </li>
                            <li>
                                <a href="#">Patient files</a>
                            </li>
                            <li>
                                <a href="#">Grid</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
    </nav>

    <div id="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header size-2 centered">Administrator's Dashboard</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-calendar fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="size-3"><?php echo $todayRows; ?></div>
                                <div>New People did the test today!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-male fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="size-3"><?php echo $maleRows; ?></div>
                                <div>of them were male!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-female fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="size-3"><?php echo $femaleRows; ?></div>
                                <div>of them were female!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="size-3"><?php echo $allRows; ?></div>
                                <div>People have answered the test in total!</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">

                        <?php
                        if (isset($_GET['page'])) {
                            $page_name = $_GET['page'];
                            include($page_name);
                        }else{ ?>

                <div id="map-chart"></div>
                <script src="js/mapchart.js"></script>

                            <?php } ?>
            </div>
        </div>
    </div>

</div>
</body>

</html>