<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact</title>
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/modal.css" rel="stylesheet">
    <link href="../css/dropdown.css" rel="stylesheet">

    <link href="../css/style_contact.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/creative.css" rel="stylesheet">
    <link href="../css/home.css" rel="stylesheet">
</head>
<body id="page-top">

    <?php 
      include '../php/header.php';
    ?>
    <section>
	 <div class="contact-us-main padding-top-60 padding-bottom-60">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="contact-form-wrapper">
                        <div class="title-topic">
                        	<h2>Liên Hệ</h2>
                        </div>
                        <form action="#" method="POST" class="contact-form">
                            <div class="form-group width-100per"><input id="email" type="email" placeholder="EMAIL" class="form-control" required="required"></div>
                            <div class="form-group width-100per"><input id="subject" type="text" placeholder="SUBJECT" class="form-control"></div>
                            <div class="form-group width-100per"><textarea id="comment" rows="3" placeholder="COMMENT" class="form-control form-textarea" required="required"></textarea></div>
                            <div class="btn-wrapper"><button type="submit" class="btn btn-style-1" style="border-radius:4px;" onclick="addContact()">Submit</button></div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="block-info">
                        <div class="title-topic">
                        	<h2>Thông Tin Liên Hệ</h2>
                        </div>
                        <div class="text"><p>Mọi thắc mắc xin vui lòng liên hệ chúng tôi. Vui lòng điền đầy đủ thông tin cần thiết và gửi về theo biểu mẫu kế bên. Chúng tôi sẽ liên lạc và trả lời sớm nhất.</p>
                        <p>Chúc quý khách mua hàng vui vẻ</p>
                        </div>
                         <div class="info">
                         	<ul class="list-unstyled contact-us-list-info">
                                <li><i class="icons fa fa-envelope-o"></i><a href=""> Hello@gmail.com</a></li>
                                <li><i class="icons fa fa-phone"></i><a href=""> Phone:3333 222 1111</a></li>
                                <li><i class="icons fa fa-map-marker"></i><a href=""> 99 Barnard St - Suite 111 United States - GA 22222</a></li>
                        	</ul>
                         </div>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 padding-top-100"></div>
        </div>
    </div>
    <div class="map col-sm-12 col-xs-12"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6672572044113!2d106.65991691432681!3d10.760107062438141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752eefca0e6fb9%3A0xec3f3a1620c01884!2zS8O9IHTDumMgeMOhIMSQ4bqhaSBo4buNYyBCw6FjaCBLaG9h!5e0!3m2!1svi!2s!4v1475481089285" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe> </div>
    </section>

    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/enter-search.js"></script>
    <script src="../js/modal2.js"></script>
    <script src="addContact.js"></script>
</body>
</html>