
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>

<script>
        $(document).ready(function() {
                var dataTable = $('#lookup').DataTable( {
                    "processing": true,
                    "serverSide": true,
                    "ajax":{
                        url :"ambildata.php", // json datasource
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
  
      <div class="row">
          <div class="col-md-12">
              <div class="box box-info">
                  <div class="box-header with-border">				  
                      <class="box-title"><h4><center>Employee data</center></h4><p></p>
	
	<table id="lookup" class="table table-bordered table-hover">  
                                       <thead bgcolor="#eeeeee" align="center">
                                        <tr>    
                                        <th>NIK</th>
                                        <th>Name </th>
                                        <th>Birthday</th>
                                        <th>Status</th>
                                        <th>Religion </th>
										<th>Email</th>
										<th>Address</th>
										<th class="text-center"> Action </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
    </table>
									
                  </div>
              </div>

                  <div class="tab-content">
                  </div>
	  

    <?php
 // <th class="text-center"> Action </th>
?>  