<!DOCTYPE html>
<html lang="vi">
<head>
  <title>Admin | Product</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="../css/admin/style.css">
  <link rel="stylesheet" type="text/css" href="../bootstrap-3.3.5-dist/css/bootstrap.css"/>
  <link href="../css/admin/bootstrap.min.css" rel="stylesheet">

  <link href="../css/admin/simple-sidebar.css" rel="stylesheet">
  <link href="../css/admin/user.css" rel="stylesheet">
  <link href="../css/admin/layout.css" rel="stylesheet">
</head>
<body>
<?php
  session_start();
  if ($_SESSION['login'] == false){
    header("location:index.php");
  }
  // echo $_SESSION['username'];
?>
<form name="logout" id="logout" method="POST" action="logout.php">
<input type="submit" name="submit" id="submit" value="Logout"/>
</form>
  <div class="row">
    <div class="col-md-2">
      <div id="wrapper">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="../">
                        Page
                    </a>
                </li>
                <li>
                    <a href="../admin/user.php">User</a>
                </li>
                <li>
                    <a href="../admin/product.php">Product</a>
                </li>
                <li>
                    <a href="../admin/rating.php">Ratting</a>
                </li>
                <li>
                    <a href="../admin/contact.php">Contact</a>
                </li>
            </ul>
        </div>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-2">
      <button type="button" class="btn btn-success" data-toggle="modal" href='#modal-add-product' style="margin: 40px 15px">Add</button>
      <div class="modal fade" id="modal-add-product">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Add New Product</h4>
            </div>
            <div class="modal-body">
              <form method="POST" role="form">                       
                <!-- <div class="form-group">
                  <label for="">ID</label>
                  <input type="text" class="form-control" id="car_id" placeholder="ID">
                </div> -->
                <div class="form-group">
                  <label for="">ID</label>
                  <input type="text" class="form-control" id="product_id" placeholder="ID">
                </div>
                <div class="form-group">
                  <label for="">Name</label>
                  <input type="text" class="form-control" id="product_name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="">Price</label>
                  <input type="text" class="form-control" id="product_price" placeholder="Price">
                </div>
                <div class="form-group">
                  <label for="">Type</label>
                  <input type="text" class="form-control" id="product_type" placeholder="Type">
                </div>
                <div class="form-group">
                  <label for="">Class</label>
                  <input type="text" class="form-control" id="product_class" placeholder="Class">
                </div>
                <div class="form-group">
                  <label for="">Description</label>
                  <input type="text" class="form-control" id="product_description" placeholder="Description">
                </div>
             </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addProduct()">Add Product</button>
              </div>
          </div>
        </div>
      </div>
        <!-- /modal-add-new-car -->


      <div class="modal fade" id="modal-edit-product">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Edit Product</h4>
                  </div>
                  <div class="modal-body">
                      <form method="POST" role="form">                       
                          <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" class="form-control" id="edit_product_name" placeholder="Name">
                          </div>
                          <div class="form-group">
                              <label for="">Price</label>
                              <input type="text" class="form-control" id="edit_product_price" placeholder="Price">
                          </div>
                          <div class="form-group">
                              <label for="">Type</label>
                              <input type="text" class="form-control" id="edit_product_type" placeholder="Type">
                          </div>
                          <div class="form-group">
                              <label for="">Class</label>
                              <input type="text" class="form-control" id="edit_product_class" placeholder="Class">
                          </div>
                          <div class="form-group">
                              <label for="">Description</label>
                              <input type="text" class="form-control" id="edit_product_description" placeholder="Description">
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary" onclick="saveEditProduct()">Save changes</button>
                      <input type="hidden" id="product_id_to_edit">
                  </div>
              </div>
          </div>
      </div>
      <div id="productTable">
            
      </div>
    </div>
  </div>
  
<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="../bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
<script type="text/javascript" src="../js/script_product.js"></script>
</body>
</html>