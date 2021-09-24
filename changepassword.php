<?php 
include "koneksi.php" ;
?>
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ambildatatraining.php", // json datasource
                        type: "post",  // method  , by default get
                        error: function(){  // error handling
                            $(".lookup-error").html("");
                            $("#lookup").append('<tbody class="employee-grid-error"><tr><th colspan="3">No data found in the server</th></tr></tbody>');
                            $("#lookup_processing").css("display","none");
                            
                        }
                    }
                } );
            } );
        </script>
		
		
<style>
    #image-holder {
    margin-top: 8px;
    }

    #image-holder img {
    border: 8px solid #DDD;
    max-width:100%;
    }
</style>

	<form class="form-horizontal" method="post" action="updatepassword.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Change Password</h3>
					  <?php
					 $kd = $_SESSION['akses'];
					 $cek = $_SESSION['nik'];
			         $sql = mysqli_query($connect, "SELECT * FROM hak_akses WHERE akses ='$kd' && Nik ='$cek'");
			           if(mysqli_num_rows($sql) == 0){
				      // header("Location:home_LCDC.php?page=changepassword");
			           }
					   else{
				       $row = mysqli_fetch_assoc($sql);
				      // print_r($row);
			           }
					  ?>
					  <div class="box-body">
					  <div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Nik</label>
  							<div class="col-sm-10">
  							<input readonly type="text" class="form-control" placeholder="In Number" name="Nik" id="Nik" value="<?php echo $row['Nik']; ?>">
							</div>
					  </div>
					  <div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Username</label>
  							<div class="col-sm-10">
  							<input type="text" class="form-control" placeholder="In Number" name="Username" id="Username" value="<?php echo $row['Username']; ?>">
							</div>
					  </div>
					  <div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">Old Password</label>
  							<div class="col-sm-10">
  							<input readonly type="password" class="form-control"  name="oldpassword" id="oldpassword" value="<?php echo $row['Password']; ?>">
							</div>
					  </div>
					  <div class="form-group">
  							<label for="tiga" class="col-sm-2 control-label">New Password</label>
  							<div class="col-sm-10">
  							<input type="password" class="form-control" name="newpassword" id="newpassword" value="">
							</div>
					  </div>
					  <div class="form-group">
                            <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="update" name="update">
						    <div class="col-sm-10">
							</div>
                    </div>
			      </div>
              </div> 						   					
          </div>
	  </div>
      </div>
	</form>



      