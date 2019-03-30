<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/style-user.css">
<title>User</title>
<div class="Wrapper" ng-app="myApp">
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" style="padding-left: 0;">
                <div class="Sidebar  hidden-xs" style="height:100vh;" ng-class="boolie ? 'is-collapsed' : ''">
                    <header class="Sidebar-header ">
                        <div class="Sidebar-logo">
                            <img class="img-responsive" src="images/use.png"></img>
                        </div>
                    </header>
                    <nav role="navigation">
                        <ul>
                            <li class="Sidebar-navItem">
                                <i class="far fa-chart-bar" style="color:#656465"></i>
                                <a href="">Performance</a>
                            </li>
                            <li class="Sidebar-navItem">
                                <i class="Sidebar-menuIcon fa fa-shopping-cart"></i>
                                <a href="#">Activities</a>
                            </li>
                            <li class="Sidebar-navItem">
                                <i class="Sidebar-menuIcon fa fa-cog"></i>
                                <a href="#">Settings</a>
                            </li>
                            <li class="Sidebar-navItem">
                                <i class="Sidebar-menuIcon fa fa-question-circle"></i>
                                <a href="#">Help & Support</a>
                            </li>                
                            <li class="Sidebar-navItem">
                                <i class="fas fa-sign-out-alt" style= "color: #656465"></i>
                                <a href="index.php">Log out</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- end col4 sidebar -->  
            <nav class="navbar navbar-default hidden-md hidden-lg" role="navigation">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">User</a>
                    </div>
            
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a href="">Performance</a>
                            </li>
                            <li><a href="#">Activities</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="#">Help & Support</a></li>
                            <li><a href="index.php">Log out</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
    <div class="container">
         <h2 class="text-center dethi" style="padding-top: 40px; font-weight: bold;">DANH SÁCH ĐỀ THI</h2>
        <div class="col-xs-8 col-md-8">
            <div class="row">
                <div class="col-xs-4 col-md-12 theme">
                    <div class="topic">Chủ đề : Lịch Sử</div>
                    <div class="title">Đề thi số 1</div>
                    <div class="time">Thời gian: 20p</div>
                    <a href="quiz.php"><div class="btn btn-info">Bắt đầu thi</div></a>
                </div>
                <div class="col-xs-4 col-md-12 theme">
                    <div class="topic">Chủ đề : Văn Hóa</div>
                    <div class="title">Đề thi số 2</div>
                    <div class="time">Thời gian: 20p</div>
                    <a href="quiz.php"><div class="btn btn-info">Bắt đầu thi</div></a>
                </div>
                <div class="col-xs-4 col-md-12 theme">
                    <div class="topic">Chủ đề : Xã hội</div>
                    <div class="title">Đề thi số 3</div>
                    <div class="time">Thời gian: 20p</div>
                    <a href="quiz.php"><div class="btn btn-info">Bắt đầu thi</div></a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>