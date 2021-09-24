<style>
.save_button {
    min-width: 80px;
    max-width: 80px;
}
</style>
<?php 
$json=file_get_contents('data.json');
$data=json_decode($json);
?>
<?php 
$json=file_get_contents('data1.json');
$data1=json_decode($json);
?>
<script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ambildatacompany.php", // json datasource
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
	<form class="form-horizontal" method="post" action="companyinput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Company Record</h3>
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
  									<div  class="col-sm-10">
  									 <select name="nik" class="form-control" id="nik">
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
  									<label for="Join date" class="col-sm-2 control-label">Join Of Date</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control"  name="join_date" id="join_date" value="">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Grade</label>
  									<div class="col-sm-10">
  									 <select name="grade" class="form-control" id="grade">
  									 <option>---select---</option>
									<?php
									include "koneksi.php";
									$sql1 = mysqli_query($connect,"SELECT grade FROM grade ");
									while ( $row1=mysqli_fetch_assoc($sql1)) {
									echo "<option value='".$row1["grade"]."'>";
									echo $row1['grade'];
									echo "</option>";
									}
									echo '</select>';
									?>
  									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Directorate</label>
  									<div  class="col-sm-10">
  									 <select name="Directorate" class="form-control" id="Directorate">
  									 <option value == "">---select---</option>
									<?php
									 foreach($data1 as $key=>$val){
									 echo'<option>'.$key.'</option>';
									 }
									 ?>
								</select>
  									</div>
  								</div>	
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Position</label>
  									<div  class="col-sm-10">
  									 <select name="position" class="form-control" id="position">
  									 <option value = "">---select---</option>
  									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Employee Status</label>
  									<div  class="col-sm-10">
  									 <select name="employeestatus" class="form-control" id="EmployeStatus">
  									 <option>---select---</option>
									 <option>Outsourcing</option>
  									 <option>Contract</option>
  									 <option>Permanen</option>
  									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="Join date" class="col-sm-2 control-label">Expired Contract</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control"  name="end_date" id="end_date" value="" style="display:none;">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Company</label>
  									<div class="col-sm-10">
  									 <select name="company" class="form-control" id="company" required>
									 <option value=""> ---Select---</option>
									 <?php
									 foreach($data as $key=>$val){
									 echo'<option>'.$key.'</option>';
									 }
									 ?>
  									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Address</label>
  									<div class="col-sm-10">
  									 <select name="location" class="form-control" id="AddresCompany" required>
									 <option value=""> ---Select---</option>
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
					  </form>
                     <div id="DataRecord" class="tab-pane fade">
					  <div class="box-body">
					  <div class="form-group">
                      <a href="reportcompany.php"  data-toggle="tooltip" title="Report" class="glyphicon glyphicon-print" width = "50px">  </a>	
						<div class="col-sm-10">
						</div>
                        </div>
							<?php
				//			include "koneksi.php";
					//		$sql = mysqli_query($connect,"SELECT End_date FROM perusahaan ");
						//	while ( $row=mysqli_fetch_assoc($sql))
							//{
							//if(strtotime($row["End_date"])>0 && strtotime(date("Y-m-d"))>=strtotime($row["End_date"]))
							//{
							//echo '<script type="text/javascript">alert("You Have Contract Expired for employee.");</script>';	
							//}	
							//}	
							?>	
					  <table id="lookup" class="table table-bordered table-hover" style="background-color: White;" >  
                            <thead bgcolor="#eeeeee" align="center">
                            <tr>    
                            <th >NIK</th>
                            <th>Join Of Date</th>
                            <th>Grade</th>
							<th>Position</th>
							<th>Directorate</th>
							<th>Employee Status</th>
							<th>Expired Contract</th>
							<th>Company</th>
							<th>Address</th>
							<th class="text-center"> Action </th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
						</table>
                        </div>
                      </div>
					 </div>
      </div>
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	<script>
	//script untuk dropdown
	$('#company').change(function(){
		var company=$(this).val().trim();
		if(company){
			$('#AddresCompany').html('<option value="">=========Please choose your company=========</option>');
			// ajax for get list 2
			$.ajax({
				method: "POST",
				url: "get_json.php",
				data: { list: 2, data: company }
			})
			.done(function( result ) {
				$('#AddresCompany').html(result);
			});
		}
	});

	$('#AddresCompany').change(function(){
		var list1=$('#company').val().trim();
		var list2=$(this).val().trim();
		
	});
	</script>
	<script>
	//script untuk dropdown
	$('#Directorate').change(function(){
		var Directorate=$(this).val().trim();
		if(Directorate){
			$('#position').html('<option value="">=========Please choose your Directorate=========</option>');
			// ajax for get list 2
			$.ajax({
				method: "POST",
				url: "get_json1.php",
				data: { list: 2, data: Directorate }
			})
			.done(function( result ) {
				$('#position').html(result);
			});
		}
	});

	$('#position').change(function(){
		var list1=$('#Directorate').val().trim();
		var list2=$(this).val().trim();
		
	});
	</script>
	<script>
	$("#EmployeStatus").change(function(){
		var val = $(this).val();
		if (val=="---select---"){ $("#end_date").hide();}
		else if (val=="Contract"){ $("#end_date").show();}
		else if (val=="Outsourcing"){ $("#end_date").show();}
		else if (val=="Permanen"){ $("#end_date").hide();}
	});
	</script>

      