<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>My profile</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modal.css" rel="stylesheet">
    <link href="../css/dropdown.css" rel="stylesheet">

    <link href="../css/product.css" rel="stylesheet">
    <link href="../css/profile.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/creative.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<?php 
    include '../php/header.php';
?>
<section class="my-profile">
   <div class="content profile lcol-xs-12">
      <div class="left-profile col-xs-12 col-sm-2">
        <div class="left-info left-left col-xs-6 col-sm-12">
          <div class="btn-group-vertical menu">
              <button type="button" class="btn btn-primary profile">MY ACOUNT</button>
              <button type="button" class="btn btn-primary profile" id="setaccount">SETTING ACOUNT</button>
          </div>
        </div>
      </div>
      <div class="center-profile col-xs-10 col-sm-8">
          <div class=" form-dangky col-xs-12 col-sm-12">
              <div class="title-topic">
                  <h3 class="title-profile"><b>MY PROFILE</b></h3>
              </div>
              <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title">Sheena Shrestha</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Department:</td>
                        <td>Programming</td>
                      </tr>
                      <tr>
                        <td>Hire date:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Date of Birth</td>
                        <td>01/24/1988</td>
                      </tr>
                      <tr>
                        <tr>
                            <td>Gender</td>
                            <td>Female</td>
                        </tr>
                       <tr>
                            <td>Home Address</td>
                            <td>Kathmandu,Nepal</td>
                       </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="mailto:info@support.com">info@support.com</a></td>
                      </tr>
                        <td>Phone Number</td>
                        <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                        </td>           
                      </tr>   
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="right-profile col-xs-12 col-sm-2">
        <div class="right-info left-left col-xs-6 col-sm-12">
        </div>
      </div>
    </div>

</section>
<?php 
    include '../php/footer.php';
?>
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#setaccount").click(function(){
          window.location.href ='../php/profile.php';
        });
      });
    </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="../vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="../vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="../js/creative.min.js"></script>
    <script src="../js/enter-search.js"></script>
    <script src="../js/modal2.js"></script>

</body>

</html>