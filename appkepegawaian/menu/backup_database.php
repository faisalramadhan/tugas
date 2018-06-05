<?php require_once('../Connections/koneksi.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "../index.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_koneksi, $koneksi);
$query_admin = "SELECT yourname FROM `admin`";
$admin = mysql_query($query_admin, $koneksi) or die(mysql_error());
$row_admin = mysql_fetch_assoc($admin);
$totalRows_admin = mysql_num_rows($admin);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>PT Michinandco</title>
    <!-- Bootstrap Styles-->
    <link href="../Bootstrap/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="../Bootstrap/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="../Bootstrap/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="../Bootstrap/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"></head>

<body>
<div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand"><strong><i class="icon fa fa-bolt"></i> PT MICHINANDCO</strong></a>
            </div>
            
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                  
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="change_password.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $logoutAction ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="../dashboard.php"><i class="fa fa-user"></i> Employees</a>
                    </li>
                    <li>
                        <a href="department.php"><i class="fa fa-desktop"></i> Department</a>
                    </li> 
                    <li>
                        <a href="add_employee.php"><i class="fa fa-edit"></i> Input Employee</a>
                    </li>
					 
					 <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Database<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="backup_database.php">Backup Database</a>
                            </li>
                            <li>
                                <a href="restore_database.php">Restore Databaset</a>
                            </li>
					   </ul>
				  </li>	
<li role="presentation" class="divider"></li>
            
		</ul>
        
        </br>
        </br>
		<center><div><a>Aplication by Faisal</a><br/><a >PT Michinandco</a></div></center>
div><!--/.sidebar-->
</div>

        </nav>
        <!-- /. NAV SIDE  -->        
        <div id="page-wrapper" >
        <div class="header"> 
                        </br>
						<ol class="breadcrumb">
					  <li ><a href="../dashboard.php">Home</a></li>
					  <li><a>Backup Database</a></li>
					</ol> 
									
		</div> 
                 <div id="page-inner">
                             
                 <!-- /. ROW  -->
                    <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                    </div>
                    <!--End -->
                    
                <!-- /. ROW  -->
                <hr>
<p>Database : <?php echo $database_koneksi?></p>
<p>List Of Tables</p>
<form method="post" action="proses.php">
  <?php $query = "SHOW TABLES";
$hasil = mysql_query($query);
?>
<?php while ($data = mysql_fetch_row($hasil))
{
   echo " - $data[0]<br>";
}?>
<br/>
<input type="submit" name="submit" class="btn btn-default" value="Backup Data" >
</form>

                        </div>
                  </div>
                  
<!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
      <!-- /. WRAPPER  -->
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../Bootstrap/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="../Bootstrap/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="../Bootstrap/js/morris/raphael-2.1.0.min.js"></script>
    <script src="../Bootstrap/js/morris/morris.js"></script>
	
	
	<script src="../Bootstrap/js/easypiechart.js"></script>
	<script src="../Bootstrap/js/easypiechart-data.js"></script>
	
	 <script src="../Bootstrap/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="../Bootstrap/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="../Bootstrap/js/chart.min.js"></script>  
    <script type="text/javascript" src="../Bootstrap/js/chartjs.js"></script>
</body>
</html>
<?php
mysql_free_result($admin);
?>
