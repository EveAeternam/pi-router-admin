<!DOCTYPE html>
<?php 
	include("dist/php/get-admin-data.php");
	include("dist/php/get-router-status.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PiRouter | Home</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">Pi<b>R</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Pi</b>Router Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Notifications Menu -->
          <li class="dropdown notifications-menu">
            <!-- Menu toggle button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- Inner Menu: contains the notifications -->
                <ul class="menu">
                  <li><!-- start notification -->
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <!-- end notification -->
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks Menu -->
          
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user3-128x128.jpg" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">Administrator</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">-

                <p>
                  Administrator
                  <small>Frimware Version 0.1<br>(Evangeline Archer, January 18)</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="#">Check for Updates</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="#">GitHub</a>
                  </div>
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-danger btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button 
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>-->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo 'dist/usr/' . $pic; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $fullname; ?></p>
          <!-- Status -->
          	<a href="#"><?php include('dist/php/check-online.php'); ?></a>
			<a href="#"><?php echo '<i class="fa fa-circle text-success"></i> PHP Online'; ?></a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BASIC</li>
        <!-- Optionally, you can add icons to the links -->
			<li class="active"><a href="#"><i class="fa fa-home"></i> <span>HOME</span></a></li>
			<li><a href="internet.php"><i class="fa fa-plug"></i> <span>INTERNET</span></a></li>
			<li><a href="wireless.php"><i class="fa fa-wifi"></i> <span>WIRELESS</span></a></li>
			<li><a href="devices.php"><i class="fa fa-laptop"></i> <span>ATTACHED DEVICES</span></a></li>
			<li><a href="parental.php"><i class="fa fa-child"></i> <span>PARENTAL CONTROLS</span></a></li>
			<li><a href="extras.php"><i class="fa fa-plus"></i> <span>EXTRAS</span></a></li>
			<li><a href="hardware.php"><i class="fa fa-wrench"></i> <span>HARDWARE</span></a></li>

		  <li class="header">ADVANCED <i>(Coming Soon)</i></li>
		  <!--<li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li>-->
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        HOMEPAGE
        <small>Basic</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Basic</a></li>
        <li class="active">Home</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      	<div class="row">
			<div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title"><em class="fa fa-dashboard"></em> General Dashboard</h3>
				</div>
				<div class="box-body bg-gray">
					  <!-- INTERNET -->
					<a href="#"><div class="col-md-3 col-sm-6 col-xs-12">
					  <div class="info-box">
						<span class="info-box-icon bg-blue-gradient"><i class="fa fa-plug"></i></span>

						<div class="info-box-content">
							<span class="info-box-number">INTERNET</span>
							<span class="info-box-text">STATUS: <strong>GOOD</strong></span>
							<span class="info-box-more">Via Ethernet (BRIDGE)</span>
						</div>
						  </div>
					</div></a>
					<!-- WIRELESS -->
					<a href="#"><div class="col-md-3 col-sm-6 col-xs-12">
					  <div class="info-box">
						<span class="info-box-icon bg-purple-gradient"><i class="fa fa-wifi"></i></span>

						<div class="info-box-content">
							<span class="info-box-number">WIRELESS</span>
							<span class="info-box-text">SSID: <strong><?php echo $ssid; ?></strong></span>
							<span class="info-box-text">Password: <strong><?php echo $pass; ?></strong></span>
						</div>
					  </div>
					</div></a>
					<!-- DEVICES -->
					<a href="#"><div class="col-md-3 col-sm-6 col-xs-12">
					  <div class="info-box bg-gray-light">
						<span class="info-box-icon bg-maroon-gradient"><i class="fa fa-laptop"></i></span>

						<div class="info-box-content">
							<span class="info-box-number">ATTACHED DEVICES</span>
							<span class="info-box-text">Number of Devices: <strong>1</strong></span>
						</div>
					  </div>
					</div></a>
					<!-- PARENTAL -->
					<a href="#"><div class="col-md-3 col-sm-6 col-xs-12">
					  <div class="info-box">
						<span class="info-box-icon bg-yellow-gradient"><i class="fa fa-child"></i></span>

						<div class="info-box-content">
							<span class="info-box-number">PARENTAL CONTROL</span>
							<span class="info-box-text">STATUS: <strong>DISABLED</strong></span>
						</div>
					  </div>
					</div></a>
					<!-- HARDWARE -->
					<a href="#"><div class="col-md-3 col-sm-6 col-xs-12">
					  <div class="info-box">
						<span class="info-box-icon bg-green-gradient"><i class="fa fa-wrench"></i></span>

						<div class="info-box-content">
							<span class="info-box-number">HARDWARE</span>
							<span class="info-box-text">Display: <strong>NONE</strong></span>
						</div>
					  </div>
					</div></a>
					<!-- RPI -->
					<a href="#"><div class="col-md-3 col-sm-6 col-xs-12">
					  <div class="info-box">
						  <span class="info-box-icon bg-red-gradient"><img src="dist/img/raspberry.svg" height="60"></img></span>

						<div class="info-box-content">
							<span class="info-box-number">RASPBERRY PI</span>
							<span class="info-box-text">SSH: <strong>ENABLED</strong></span>
						</div>
					  </div>
					</div></a>
				</div>
		  </div>
		</div>
		
		<!--<div class="row">
			<div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title"><em class="fa fa-plus"></em> Title</h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
					  <i class="fa fa-minus"></i></button>
					<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
					  <i class="fa fa-times"></i></button>
				  </div>
				</div>
				<div class="box-body bg-gray">
				  Start creating your amazing application!
				</div>
				<div class="box-footer">
				  Footer
				</div>
		  </div>
		</div>-->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      PiRouter Admin Dashboard v0.1 (10/01/2018)
    </div>
    <!-- Default to the left -->
    <strong>Evangeline Archer, 2017-2018 | <a href="#">EveAeternam</a></strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>