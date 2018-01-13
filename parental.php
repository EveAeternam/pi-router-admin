<!DOCTYPE html>
<?php
	include("dist/php/get-admin-data.php");
	if(isset($_GET["msg"])) $msg = htmlspecialchars($_GET["msg"]);
	if(isset($_GET["msgtype"])) $msgtype = htmlspecialchars($_GET["msgtype"]);
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>PiRouter | Parental Controls</title>
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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" class="logo">
      <span class="logo-mini">Pi<b>R</b></span>
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
                  <small>Firmware Version 0.1<br>(Evangeline Archer, January 18)</small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                  <div class="col-xs-6 text-center">
                    <a href="#">Check for Updates</a>
                  </div>
                  <div class="col-xs-6 text-center">
                    <a href="https://github.com/EveAeternam/pi-router-admin">GitHub</a>
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
          <img src="<?php echo 'dist/usr/default.png'; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo 'Administrator'; ?></p>
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
			<li><a href="index.php"><i class="fa fa-home"></i> <span>HOME</span></a></li>
			<li><a href="internet.php"><i class="fa fa-plug"></i> <span>INTERNET</span></a></li>
			<li><a href="wireless.php"><i class="fa fa-wifi"></i> <span>WIRELESS</span></a></li>
			<li><a href="devices.php"><i class="fa fa-laptop"></i> <span>ATTACHED DEVICES</span></a></li>
			<li class="active"><a href="#"><i class="fa fa-child"></i> <span>PARENTAL CONTROLS</span></a></li>
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
      <h1> Parental Controls &nbsp; &nbsp; &nbsp; &nbsp; <small>Allow or block access to certain websites</small></h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Basic</a></li>
        <li class="active">Parental Controls</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

		<div class="row">
			<div class="col-xs-4">
				
			</div>
			<div class="col-xs-4 text-center">
				Parental Control is currently <strong>off</strong>.
			</div>
			<div class="col-xs-4 text-right">
				<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-add-bl"><em class="fa fa-plus"></em> Add Website to Blacklist </button>
			</div>
		</div>
		
		<div class="row">
			<center>
				<button type="button" class="btn btn-danger"><em class="fa fa-remove"></em> Cancel </button>
				<button type="button" class="btn btn-default"> Test </button>
				<button type="button" class="btn btn-success"> Apply <em class="fa fa-check-circle"></em></button>
			</center>
		</div>
		
		<div class="modal fade" id="modal-add-bl">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><em class="fa fa-remove"></em> Add Website to Blacklist</h4>
              </div>
				<form action="dist/php/insert-bl.php" method="post">
					  <div class="modal-body">
						  <h4>Website URL</h4>
						  <div class="input-group"><span class="input-group-addon"><strong>www</strong></span>
							<input type="text" name="link" id="link" class="form-control" placeholder="http://www.that-crappy-site.com/">
						</div>
					  </div>
					  <div class="modal-footer">
						<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
						<button type="submit" class="btn btn-danger">BLACKLIST</button>
					  </div>
				</form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		
		<br>
		<div class="box">
			<div class="box-body">
				<strong>Enable Parental Controls?</strong>
			  <div class="form-group">
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                      	Disabled
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" disabled>
                      	Enabled
                    </label>
                  </div>
                </div>
			</div>
		</div>
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><em class="fa fa-stop-circle"></em> Blacklisted Websites</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
          </div>
        </div>
        <div class="box-body">
			<?php
				if (isset($msg) && isset($msgtype)) {
					if ($msgtype == "success") {
						echo '<div class="callout callout-success"><h4>Success!</h4><p>';
						echo $msg;
						echo '</p></div>';
					} else if ($msgtype == "alert") {
						echo '<div class="callout callout-danger"><h4>Error!</h4><p>';
						echo $msg;
						echo '</p></div>';
					}
				}
			?>
          <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Website Name</th>
                  <th>IP Address</th>
				  <th>URL</th>
                  <th>Remove from Blacklist</th>
                </tr>
                </thead>
                <tbody>
					<?php include("dist/php/connect-sql.php");
					$sql = "SELECT * FROM `web-blacklist` WHERE 1";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
						$i = 1;
						while($row = $result->fetch_assoc()) {
							echo '<tr>';
							echo '<td>' . $i . '</td>';
							echo '<td>' . $row["title"] . '</td>';
							echo '<td>' . $row["ip"] . '</td>';
							echo '<td>' . $row["link"] . '</td>';
							echo '<td>' . '<a href="dist/php/remove-bl.php?id=' . $row["id"] . '"><button type="button" class="btn btn-danger"><em class="fa fa-trash"></em> Remove </button></a>' . '</td>';
							echo '</tr>';
							$i++;
						}
					} else {
						echo "There are no blacklisted websites :)<br>";
					}
					$conn->close();?>
                </tfoot>
          </table>
        </div>
      </div>

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