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

	<form class="form-horizontal" method="post" action="financialinput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Financial Record</h3>
					  
                  </div>
              </div>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#FinancialRegister" data-toggle="tab">Financial Register</a></li> 
        <li><a href="#FinancialRecord" data-toggle="tab">Financial Record</a></li>
             </ul>
                  <div class="tab-content">
                      <div id="FinancialRegister" class="tab-pane fade in active"> 						 
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
  									<label for="tiga" class="col-sm-2 control-label">Salary</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="In Number" name="Salary" id="Salary" value="">
									</div>
								</div>
								<div class="form-group" id="main_Allowance" name="extra">		
  									<label for="tiga" class="col-sm-2 control-label">Allowance</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Allowance" name="Allowance">
									</div>
								</div>							
								<div class="form-group">
                                     <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="submit" name="submit">
						             <div class="col-sm-10">
						             </div>
                                </div>
                            </div>
                        </div>
					  
                     <div id="FinancialRecord" class="tab-pane fade">
					  <div class="box-body">
					  <table id="lookup" class="table table-bordered table-hover" style="background-color: White;">  
                                       <thead bgcolor="#eeeeee" align="center">
                                        <tr>    
                                        <th>NIK</th>
                                        <th>Salary</th>
                                        <th>Allowance</th> 
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

