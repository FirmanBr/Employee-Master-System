<script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ambildatapeformance.php", // json datasource
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

	<form class="form-horizontal" method="post" action="peformanceinput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Peformance Record</h3>
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
  									 <select name="nik" class="form-control" id="nikpeformance">
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
  									<label for="tiga" class="col-sm-2 control-label">Year Of Peformance</label>
  									<div class="col-sm-10">
  									 <select name="year"class="form-control" id="YearPeformance">
  									 <option>---select---</option>
									 <option>1991</option>
  									 <option>1992</option>
									 <option>1993</option>
									 <option>1994</option>
									 <option>1995</option>
									 <option>1996</option>
									 <option>1997</option>
									 <option>1998</option>
									 <option>1999</option>
									 <option>2000</option>
									 <option>2001</option>
									 <option>2002</option>
									 <option>2003</option>
									 <option>2004</option>
									 <option>2005</option>
									 <option>2006</option>
									 <option>2007</option>
									 <option>2008</option>
									 <option>2009</option>
									 <option>2010</option>
									 <option>2011</option>
									 <option>2012</option>
									 <option>2013</option>
									 <option>2014</option>
									 <option>2015</option>
									 <option>2016</option>
									 <option>2017</option>
  									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Description</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Description" name="DescriptionPeformance" id="DescriptionPeformance" value="">
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
                                        <th>Year of Peformance </th>
                                        <th>Description</th>
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

      