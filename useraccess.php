<script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ambildataaccess.php", // json datasource
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
<?php
If($_SESSION['akses'] != "IT") 
{
	echo '<script type="text/javascript">alert("you have no access rights.");</script>';
	echo "<script language=\"JavaScript\">document.location='home_LCDC.php?page=regemployee'</script>";
}
?>
<style>
    #image-holder {
    margin-top: 8px;
    }

    #image-holder img {
    border: 8px solid #DDD;
    max-width:100%;
    }
</style>

	<form class="form-horizontal" method="post" action="useraccessinput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">User Access</h3>
					  
                  </div>
              </div>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#RecordRegister" data-toggle="tab">User Access Registeration</a></li> 
        <li><a href="#DataRecord" data-toggle="tab">User Access List</a></li>
             </ul>
                  <div class="tab-content">
                      <div id="RecordRegister" class="tab-pane fade in active"> 						 
  						    <div class="box-body"> 
							<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">NIK</label>
  									<div class="col-sm-10">
  									 <select name = "nik" class="form-control" id="EmployeStatus">
  									 <option>---select---</option>
									<?php
									include "koneksi.php";
									$sql = mysqli_query($connect,"SELECT nik FROM data_karyawan ");
									while ( $row=mysqli_fetch_assoc($sql)) {
									echo "<option value='".$row["nik"]."'>";
									echo $row['nik'];
									echo "</option>";
									}
									echo '</select>';
									?>
  									</select>
  									</div>
  								</div>	
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Username</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Username" name="UsernameAccess" id="UsernameAccess" value="">
									</div>
								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Password</label>
  									<div class="col-sm-10">
  									<input type="password" class="form-control" placeholder="Password" name="PasswordAccess" id="PasswordAccess" value="">
									</div>
								</div>
								<div class="form-group">
  									<label for="Access" class="col-sm-2 control-label">Access</label>
  									<div class="col-sm-10">
      									 <select name="access"class="form-control" id="Access">
      									 <option>---Select---</option>
										 <option>IT</option>
      									 <option>LCDC</option>
      									 <option>CSR</option>
      									</select>
  									</div>
  								</div>
								<div class="form-group">
                                     <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="submit" name="submit">
						             <div class="col-sm-10">
						             </div>
                                </div>
					        </div>
                      </div>
					  
                     <div id="DataRecord" class="tab-pane fade">
					  <div class="box-body">
					  <table id="lookup" class="table table-bordered table-hover">  
                            <thead bgcolor="#eeeeee" align="center">
                            <tr>    
                            <th>Nik</th>
							<th>Username </th>
                            <th>Password </th>
                            <th>Type of Access</th>
							<th class="text-center"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
						</table>
                       </div>
					 </div>
      </div>
	</form>  

      