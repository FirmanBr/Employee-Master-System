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

	<form class="form-horizontal" method="post" action="traininginput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Training Record</h3>
                  </div>
              </div>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#RecordRegister" data-toggle="tab">Record Register</a></li> 
        <li><a href="#DataRecord" data-toggle="tab">History Record</a></li>
             </ul>
                  <div class="tab-content">
                      <div id="RecordRegister" class="tab-pane fade in active"> 						 
  						    <div class="box-body"> 																								
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">NIK</label>
  									<div class="col-sm-10">
  									 <select name="nik"class="form-control" id="niktraining">
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
  									<label for="Join date" class="col-sm-2 control-label">Date</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control"  name="date_training" id="date_training" value="">
  									</div>
  								</div>							
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Type Of Training</label>
  									<div class="col-sm-10">
  									 <select name="typetraining" class="form-control" id="typetraining">
  									 <option>---select---</option>
									 <option>Soft Skill</option>
  									 <option>Hard Skill</option>
  									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Start</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control"  name="Start" id="Start" value="">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">End</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control"  name="End" id="End" value="">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Title</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Title" name="Descriptiontraining" id="Descriptiontraining" value="">
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
					  <table id="lookup" class="table table-bordered table-hover" style="background-color: White;">  
                                       <thead bgcolor="#eeeeee" align="center">
                                        <tr>    
                                        <th>NIK</th>
                                        <th>Date</th>
                                        <th>Type Of Training</th>
										<th>Start</th>
										<th>End</th>
                                        <th>Detail Information</th> 
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


<?php
 // <th class="text-center"> Action </th>
?>  	

      