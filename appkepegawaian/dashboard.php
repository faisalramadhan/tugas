<?php require_once('Connections/koneksi.php'); ?>
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
	
  $logoutGoTo = "index.php";
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

mysql_select_db($database_koneksi, $koneksi);
$query_pegawai = "SELECT * FROM pegawai";
$pegawai = mysql_query($query_pegawai, $koneksi) or die(mysql_error());
$row_pegawai = mysql_fetch_assoc($pegawai);
$totalRows_pegawai = mysql_num_rows($pegawai);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>PT Michinandco</title>
	<!-- Bootstrap Styles-->
    <link href="Bootstrap/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="Bootstrap/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="Bootstrap/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="Bootstrap/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" /></head>

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
                        <li><a href="menu/change_password.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
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
                        <a class="active-menu" href="dashboard.php"><i class="fa fa-user"></i> Employees</a>
                    </li>
                    <li>
                        <a href="menu/department.php"><i class="fa fa-desktop"></i> Department</a>
                    </li> 
                    <li>
                        <a href="menu/add_employee.php"><i class="fa fa-edit"></i> Input Employee</a>
                    </li>
					 
					 <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Database<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="menu/backup_database.php">Backup Database</a>
                            </li>
                            <li>
                                <a href="menu/restore_database.php">Restore Databaset</a>
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
					  <li ><a href="dashboard.php">Home</a></li>
					  <li><a>Data Employee Overall</a></li>
					</ol> 
									
		</div>
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">

                                    <thead>
  <tr>
                 <td class="info" width="5%"><div align="center"><strong>Id</strong></div></td>
                 <td class="info" width="25%"><div align="center"><strong>Nama</strong></div></td>
                 <td class="info" width="10%"><div align="center"><strong>Jenis Kelamin</strong></div></td>
                 <td class="info" width="10%"><div align="center"><strong>Departemen</strong></div></td>
                 <td class="info" width="20%"><div align="center"><strong>Email</strong></div></td>
               </tr>
               
               </thead>
               <?php do { ?>
                 <tr>
                <td width="5%"><div align="center"><?php echo $row_pegawai['id']; ?></div></td>
                 <td width="15%"><div><?php echo $row_pegawai['name']; ?></div></td>
                 <td width="10%"><div><?php echo $row_pegawai['gender']; ?></div></td>
                 <td width="15%"><div><?php echo $row_pegawai['departemen']; ?></div></td>
                 <td width="15%"><div><?php echo $row_pegawai['email']; ?></div></td>
               </tr>
               <?php } while ($row_pegawai = mysql_fetch_assoc($pegawai)); ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
				
		<!--/.row-->	
                  <!--   Kitchen Sink -->
                   
                  <hr />
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
   <script src="Bootstrap/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="Bootstrap/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="Bootstrap/js/dataTables/jquery.dataTables.js"></script>
    <script src="Bootstrap/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="Bootstrap/js/custom-scripts.js"></script>
</body>
</html>
<?php
mysql_free_result($admin);

mysql_free_result($pegawai);
?>
