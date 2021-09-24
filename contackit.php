<script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ambildatafinancial.php", // json datasource
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

	<form class="form-horizontal" method="post" action="operatorinput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Operator Register</h3>
					  
                  </div>
              </div>
                  <div class="tab-content">
            			    <div class="box-body"> 	
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">NIK</label>
  									<div class="col-sm-10">
  									 <select name="nik" class="form-control" id="nickleave">
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
  									<label for="tiga" class="col-sm-2 control-label">Email</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Email" name="Email" id="Email" value="">
									</div>
								</div>							
								<div class="form-group">
                                     <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="submit" name="submit">
						             <div class="col-sm-10">
						             </div>
                                </div>
                            </div>
                        
      </div>
	</form>  

