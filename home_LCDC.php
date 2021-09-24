<?php
include "koneksi.php";
//session_start();
 
?>


    <html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
        <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="dist/css/summernote.css">
        <script src="dist/js/summernote.js"></script>
    </head>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">
            <header class="main-header">
                <a href="#" class="logo">
                    <span class="logo-mini"><b>Taka</b></span>
                    <span class="logo-lg"><?php session_start(); echo $_SESSION['akses']; ?><br><br></span>
                <?php


?>

				</a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <?php include'menu.php';
				  	
			?>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <!-- Main content -->
                    <section class="content">
                        <?php 
                if(isset($_GET['page']))
                {
                 switch($_GET['page'])
                {
                    
                    case 'regemployee': include'regemployee.php'; break;
					case 'companyrecord': include'companyrecord.php';$order=1; break;
					case 'trainingrecord': include'trainingrecord.php';$order=2; break;
					case 'peformancerecord': include'peformancerecord.php';$order=3; break;
					case 'leaverecord': include'leaverecord.php';$order=4; break;
					case 'financialrecord': include'financialrecord.php';$order=5; break;
					case 'listemployee': include'listemployee.php';$order=6; break;
					case 'useraccess': include'useraccess.php';$order=7; break;
					case 'changepassword': include'changepassword.php';$order=8; break;
					case 'trouble': include'trouble.php';$order=9; break;
					case 'contackit': include'contackit.php';$order=10; break;
					case 'editfinacial': include'editfinacial.php';$order=11; break;

                }   
                }
            ?>
			
                    </section>
                </div>
                <!-- /.content-wrapper -->
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> Development
                    </div>
                    <strong>Copyright &copy; 2017 <a href="http://taka.co.id/">IT DIVISION TAKA GROUP COMPANY</a>.</strong> All rights reserved.
                </footer>
                <div class="control-sidebar-bg"></div>
        </div>
		
		

        <!-- ./wrapper -->
        <!-- Bootstrap 3.3.5 -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $(function () {
                $("#example1").DataTable({
                    "order": [[<?php echo $order; ?>, "desc"]]
                });
            });
        </script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Sparkline -->
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <!-- jvectormap -->
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/knob/jquery.knob.js"></script>
        <!-- daterangepicker -->
        <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>-->
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- datepicker -->
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <!-- Slimscroll -->
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/app.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="dist/js/demo.js"></script>
        <script>
            $('#tgl_agenda').datepicker({
                format: 'dd-mm-yyyy'
            })
        </script>
		
    </body>
    </html>
	