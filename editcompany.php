<?php
session_start();
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
                    <span class="logo-mini"><b>TAKA</b></span>
                    <span class="logo-lg">Taka Group<br><br>"; ?></span>
				</a>
				
                <nav class="navbar navbar-static-top" role="navigation">
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="glyphicon glyphicon-menu-hamburger"></span>
                    </a>
                </nav>
				
            </header>
			
			 <?php include'menu.php';?>
			 
            <div class="content-wrapper">
            <section class="content">
			<div class="box box-info">
			<div class="box-header with-border">		
			<class="box-title"><h4><center>Update Company Record</h4></center>
			</div>
			</div>
			
			<?php
			include "koneksi.php";
			$kd = $_GET['kd'];
			$sql = mysqli_query($connect, "SELECT * FROM perusahaan WHERE nik='$kd'");
			if(mysqli_num_rows($sql) == 0){
				header("Location: home_LCDC.php?page=companyrecord");
			}else{
				$row = mysqli_fetch_assoc($sql);
	
			}
			?>
			
			<form class="form-horizontal" method="post" action="updatecompany.php" enctype="multipart/form-data">
			    <div class="tab-content">
  					<div class="box-body"> 	
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Nik</label>
  							<div class="col-sm-10">
  							<input readonly type="text" class="form-control" placeholder="In Number" name="Nik" id="Nik" value="<?php echo $row['Nik']; ?>">
							</div>
						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Join Of Date</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control"  name="join_date" id="join_date" value="<?php echo $row['Join_date']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Grade</label>
  									<div class="col-sm-10">
  										<input readonly type="text" class="form-control"  name="grade" id="grade" value="<?php echo $row['Grade']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Position</label>
  									<div class="col-sm-10">
  										<input readonly type="text" class="form-control"  name="position" id="position" value="<?php echo $row['Posisition']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Directorate</label>
  									<div class="col-sm-10">
  										<input readonly type="text" class="form-control"  name="Directorate" id="Directorate" value="<?php echo $row['Directorate']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Employee Status</label>
  									<div class="col-sm-10">
  										<input readonly type="text" class="form-control"  name="employeestatus" id="employeestatus" value="<?php echo $row['Status_Kepegawaian']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Expired Contract</label>
  									<div class="col-sm-10">
  										<input  type="text" class="form-control"  name="End_date" id="employeestatus" value="<?php echo $row['End_date']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Company</label>
  									<div class="col-sm-10">
  										<input readonly type="text" class="form-control"  name="company" id="company" value="<?php echo $row['Company']; ?>">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Address</label>
  									<div class="col-sm-10">
  										<input readonly type="text" class="form-control"  name="location" id="location" value="<?php echo $row['Location']; ?>">
  									</div>
  						</div>
						
						<div class="form-group">
                            <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="Update" name="submit">
						    <div class="col-sm-10">
						    </div>
                        </div>
                    </div>
                </div>
			</Form>
                    </section>
                </div>
				
                <footer class="main-footer">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> Development
                    </div>
                    <strong>Copyright &copy; 2017 <a href="http://taka.co.id/">IT DIVISION TAKA GROUP COMPANY</a>.</strong> All rights reserved.
                </footer>
				
            <div class="control-sidebar-bg"></div>
        </div>
        
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="plugins/knob/jquery.knob.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
        <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="plugins/fastclick/fastclick.min.js"></script>
        <script src="dist/js/app.min.js"></script>
        <script src="dist/js/pages/dashboard.js"></script>
        <script src="dist/js/demo.js"></script>		
    </body>
    </html>
	