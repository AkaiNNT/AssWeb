<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="../css/admin/user.css" rel="stylesheet">
	<link href="../css/admin/layout.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css"/>
</head>
<body>
	<!-- <div id="sidebar-wrapper">
	  <ul class="sidebar-nav">                
      <li class="active-nav">
        <button>User</button>                   
      </li>
      <li>
        <button>Product</button>                   
      </li>
      <li>
        <button>Rating</button>                   
      </li>
      <li>
        <button>Cart</button>                   
      </li>
	  </ul>
	</div>
	<div class="body-admin-member">
		<h1>Member</h1>
			<div class="container table-admin-member">    
			  <table class="table table-condensed">
			    <thead>
			      <tr>
			        <th class="th">Name</th>          
			        <th class="th">Email</th>
			        <th class="th">Full Name</th>
			        <th class="th">Birthday</th>
			        <th class="th">Address</th>
			      </tr>
			    </thead>
			    <tbody>
			    </tbody>
			  </table>
			</div>
		</div> -->
	<div class="container">
    <button type="button" class="btn btn-success" data-toggle="modal" href='#modal-add-car' style="margin: 40px 15px">Add</button>
    <div class="modal fade" id="modal-add-car">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Add New Car</h4>
          </div>
          <div class="modal-body">
            <form method="POST" role="form">                       
              <div class="form-group">
                <label for="">ID</label>
                <input type="text" class="form-control" id="car_id" placeholder="ID">
              </div>
              <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="car_name" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="">Year</label>
                <input type="text" class="form-control" id="car_year" placeholder="Year">
              </div>
            </form>
          </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" onclick="addCar()">Add car</button>
            </div>
        </div>
      </div>
    </div>
      <!-- /modal-add-new-car -->


    <div class="modal fade" id="modal-edit-car">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Edit Car</h4>
                </div>
                <div class="modal-body">
                    <form method="POST" role="form">                       
                        <div class="form-group">
                            <label for="">ID</label>
                            <input type="text" class="form-control" id="edit_car_id" placeholder="ID">
                        </div>
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="edit_car_name" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="">Year</label>
                            <input type="text" class="form-control" id="edit_car_year" placeholder="Year">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="saveEditCar()">Save changes</button>
                    <input type="hidden" id="car_id_to_edit">
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
</body>
</html>