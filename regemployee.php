<?php

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

	<form class="form-horizontal" method="post" action="employeeinput.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Employee Registration</h3>
                  </div>
              </div>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#home" data-toggle="tab">Personal Information</a></li> 
        <li><a href="#Education" data-toggle="tab">Last Education</a></li>
        <li><a href="#Family" data-toggle="tab">Family</a></li>
             </ul>
                  <div class="tab-content">
                      <div id="home" class="tab-pane fade in active"> 
  						    <div class="box-body">
  								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">NIK</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="nik" name="nik" id="nik1" value="">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Identify Card</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="Identify Card" name="indetify" id="indetify" value="">
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Name</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="name" name="name" id="name1" value="">
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="birthday1" class="col-sm-2 control-label">Birthday</label>
  									<div class="col-sm-10">
  										<input type="date" class="form-control" placeholder="date_birthday" name="birthday" id="birthday1" value="">
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Status</label>
  									<div class="col-sm-10">
  									 <select name="status" class="form-control" id="status">
  									 <option>---Select---</option>
									 <option>Single</option>
  									 <option>Married</option>
  									 <option>Divorced</option>
  									</select>
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="Agama" class="col-sm-2 control-label">Religion</label>
  									<div class="col-sm-10">
      									 <select name = "agama" class="form-control" id="Agama">
      									 <option>---Select---</option>
										 <option>Moeslem</option>
      									 <option>Christian</option>
      									 <option>Buddha</option>
      									 <option>Hindu</option>
      									 <option>Confucius</option>
      									 <option>Others</option>
      									</select>
  									</div>
  								</div>
								<div class="form-group">
  									<label for="Blood" class="col-sm-2 control-label">Blood Type</label>
  									<div class="col-sm-10">
      									 <select name="blood"class="form-control" id="Blood">
      									 <option>---Select---</option>
										 <option>AB</option>
      									 <option>A</option>
      									 <option>B</option>
      									 <option>O</option>									 
      									</select>
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Fhoto</label>
  									<div class="col-sm-10">
  									<input type="file" accept="image/*" name="fhoto" class="form-control" id="fhoto1">
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Email</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="email" name="email" id="email1" value="">
  									</div>
  								</div>
  								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Adress</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="alamat" name="alamat" id="alamat1" value="">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">NPWP</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="npwp" name="npwp" id="npwp" value="">
  									</div>
  								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Account Number Mandiri</label>
  									<div class="col-sm-10">
  										<input type="text" class="form-control" placeholder="account number mandiri" name="account" id="account" value="">
  									</div>
  								</div>
                            </div>
                        </div>
					  
                     <div id="Education" class="tab-pane fade">
					  <div class="box-body">
						<div class="form-group">
  							<label for="Degree" class="col-sm-2 control-label">Degree</label>
  									<div class="col-sm-10">
      									 <select name="degree" class="form-control" id="Degree">
      									 <option>---Select---</option>
										 <option>Senior Hight School</option>
      									 <option>Diploma Degree</option>
      									 <option>Bachelor Degree</option>
      									 <option>Master Degree</option>
      									 <option>Doctoral Degree</option>
      									</select>
  									</div>
  						</div>
						<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Major</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Major" name="Major" id="Major" value="">
  									</div>
  						</div>
						<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">University</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="University" name="University" id="University" value="">
  									</div>
  						</div>
						<div class="form-group">
  							<label for="Degree" class="col-sm-2 control-label">IPK</label>
  									<div class="col-sm-10">
      									 <select name="ipk" class="form-control" id="IPK">
                                         <option>---Select---</option>
      									 <option>0.1</option>
      									 <option>0.2</option>
      									 <option>0.3</option>
      									 <option>0.4</option>
      									 <option>0.5</option>
										 <option>0.6</option>
										 <option>0.7</option>
										 <option>0.8</option>
										 <option>0.9</option>
										 <option>1.0</option>
										 <option>1.1</option>
										 <option>1.2</option>
										 <option>1.3</option>
										 <option>1.4</option>
										 <option>1.5</option>
										 <option>1.6</option>
										 <option>1.7</option>
										 <option>1.8</option>
										 <option>1.9</option>
										 <option>2.0</option>
										 <option>2.1</option>
										 <option>2.2</option>
										 <option>2.3</option>
										 <option>2.4</option>
										 <option>2.5</option>
										 <option>2.6</option>
										 <option>2.7</option>
										 <option>2.8</option>
										 <option>2.9</option>
										 <option>3.0</option>
										 <option>3.1</option>
										 <option>3.2</option>
										 <option>3.3</option>
										 <option>3.4</option>
										 <option>3.5</option>
										 <option>3.6</option>
										 <option>3.7</option>
										 <option>3.8</option>
										 <option>3.9</option>
										 <option>4.0</option>
      									</select>
  									</div>
  						</div>
                       </div>
					 </div>
                     
					 <div id="Family" class="tab-pane fade">
						<div class="box-body">
							<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Father</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Father" name="Father" id="Father" value="">
  									</div>
  						    </div>
							<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Work</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Work" name="Work_father" id="Work_Father" value="">
  									</div>
  						    </div>
							<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Mother</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Mother" name="Mother" id="Mother" value="">
  									</div>
  						    </div>
							<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Work</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Work1" name="Work_mother" id="Work_mother" value="">
  									</div>
  						    </div>
							<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Husband / Wife</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Husband / Wife" name="couple" id="couple" value="">
									</div>
						    </div>
							<div class="form-group">
							        <label for="tiga" class="col-sm-2 control-label"></label>
							        <a class="btn btn-primary btn-xs" href="#" id="btnTambahClick">+</a>
							        <a class="btn btn-danger btn-xs" href="#" id="btnHapusClick">-</a>
							</div>
							
							<div class="form-group">
                            <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="submit" name="submit">
						    <div class="col-sm-10">
						</div>
                    </div>
							
                      </div>
					</div>
      </div>
	</form> 


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

