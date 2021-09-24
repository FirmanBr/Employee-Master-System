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
	<style>
	img.kanan {
    float: right;
    margin: 0 px;
	}
	</style>
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
			<class="box-title"><h4><center>Update Employee Record</h4></center></class>
			</div>
			</div>
			
			<?php
			include "koneksi.php";
			$kd = $_GET['kd'];
			$karyawan = mysqli_query($connect, "SELECT * FROM data_karyawan WHERE nik='$kd'");
			$pendidikan = mysqli_query($connect, "SELECT * FROM pendidikan WHERE nik='$kd'");
			$keluarga = mysqli_query($connect, "SELECT * FROM keluarga WHERE nik='$kd'");
			$row = mysqli_fetch_assoc($karyawan);
			$row1 = mysqli_fetch_assoc($pendidikan);
			$row2 = mysqli_fetch_assoc($keluarga);
		
	
	
			
			?>

			<form class="form-horizontal" method="post" action="updateemployee.php" enctype="multipart/form-data">
			    <div class="tab-content">
  					<div class="box-body">
						<div class="form-group">
                            <input  type="text" class="btn btn-info pull-right" value="<?php echo $row['Name']; ?>" >
						    <div class="col-sm-10">
						</div>
                        </div>
						<div class="form-group">
						
						<?php echo "<img src='fhoto/".$row['Fhoto']."' width='157px' height='135px' class='kanan'/>"; ?>
						
						</div>
						<div class="form-group">
                            <input  type="text" class="btn btn-info pull-left" value="Data Of Employee" >
						    <div class="col-sm-10">
						    </div>
                        </div>	
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Nik</label>
  							<div class="col-sm-10">
  							<input type="text" class="form-control" placeholder="In Number" name="Nik" id="Nik" value="<?php echo $row['Nik']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">KTP</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="KTP" name="KTP" id="KTP" value="<?php echo $row['KTP']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Name</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Name" name="Name" id="Name" value="<?php echo $row['Name']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Birthday Date</label>
  							<div class="col-sm-10">
  							<input  type="date" class="form-control" placeholder="Birthday" name="Birthday" id="Birthday" value="<?php echo $row['BIrthday_date']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Status</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Status" name="Status" id="Status" value="<?php echo $row['Status']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Religion</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Religion" name="Religion" id="Religion" value="<?php echo $row['Agama']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Blood</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Blood" name="Blood" id="Blood" value="<?php echo $row['Blood']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Email</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Email" name="Email" id="Email" value="<?php echo $row['Email']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Address</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Address" name="Address" id="Address" value="<?php echo $row['Alamat']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">NPWP</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Address" name="NPWP" id="NPWP" value="<?php echo $row['NPWP']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Account Mandiri</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Account" name="Account" id="Account" value="<?php echo $row['Account']; ?>">
							</div>
						</div>
						<div class="form-group">
                            <input  type="text" class="btn btn-info pull-left" value="Last Education" >
						    <div class="col-sm-10">
						    </div>
                        </div>						
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Strata</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Strata" name="Strata" id="Strata" value="<?php echo $row1['Gelar']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Major</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="Major" name="Major" id="Major" value="<?php echo $row1['Major']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">University</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="University" name="University" id="University" value="<?php echo $row1['University']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">IPK</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="IPK" name="IPK" id="IPK" value="<?php echo $row1['IPK']; ?>">
							</div>
						</div>
						<div class="form-group">
                            <input  type="text" class="btn btn-info pull-left" value="Family" >
						    <div class="col-sm-10">
						    </div>
                        </div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Father</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="IPK" name="Father" id="Father" value="<?php echo $row2['Father']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Occupation</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="IPK" name="jobayah" id="jobayah" value="<?php echo $row2['Job_ayah']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Mother</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="IPK" name="Mother" id="Mother" value="<?php echo $row2['Mother']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Occupation</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="IPK" name="jobmother" id="jobmother" value="<?php echo $row2['Job_mother']; ?>">
							</div>
						</div>
						<div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Couple</label>
  							<div class="col-sm-10">
  							<input  type="text" class="form-control" placeholder="IPK" name="couple" id="couple" value="<?php echo $row2['couple']; ?>">
							</div>
						</div>
						<div class="form-group" id="main_child">		
  									<label for="tiga" class="col-sm-2 control-label">Child</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Child" name="Child[]"value="<?php echo $row2['Child']; ?>">
									</div>
					    </div>
						<div class="form-group">
							        <label for="tiga" class="col-sm-2 control-label"></label>
							        <a class="btn btn-primary btn-xs" href="#" id="btnTambahClick">+</a>
							        <a class="btn btn-danger btn-xs" href="#" id="btnHapusClick">-</a>
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
	<script>
$(document).ready(function(){
  var input_child=1;
  var main_child=$('#main_child').html();
  $("#btnTambahClick").click(function(){
    input_child++;
    var html='<div class="form-group" id="child_input_'+input_child+'">'+main_child+'</div>';
    $('#main_child').after(html);
  });

  $("#btnHapusClick").click(function(){
    $('#child_input_'+input_child).remove();
    if(input_child>1)
    input_child--;
  });
});
</script> 
	