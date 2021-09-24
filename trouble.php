<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>		
		
<style>
    #image-holder {
    margin-top: 8px;
    }

    #image-holder img {
    border: 8px solid #DDD;
    max-width:100%;
    }
</style>

	<form class="form-horizontal" method="post" action="troulbeemail.php" enctype="multipart/form-data">
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">Trouble Report</h3>
                  </div>
              </div>
              <div class="tab-content">
                      <div id="RecordRegister" class="tab-pane fade in active"> 						 
  						    <div class="box-body"> 																									
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Subject</label>
  									<div class="col-sm-10">
  									<input type="text" class="form-control" placeholder="Subject" name="Subject" id="Descriptiontraining" value="">
									</div>
								</div>
								<div class="form-group">
  									<label for="tiga" class="col-sm-2 control-label">Message</label>
  									<div class="col-sm-10">
  									<input type="textarea" class="form-control" placeholder="Message" name="Message" id="Descriptiontraining" value="">
									</div>
								</div>
								<div class="form-group">
                                     <input onclick="change_url()" type="submit" class="btn btn-info pull-right" value="submit" name="submitemail">
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
                                        <th>NIK</th>
                                        <th>Name </th>
                                        <th>Date</th>
                                        <th>Type Of Training</th>
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

      