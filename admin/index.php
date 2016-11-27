<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link href="../css/admin/layout.css" rel="stylesheet">
</head>
<body>
<?php
	$msg ='';
    $login_form = <<< EOD
<div class="login">
	<h1>Login</h1>
    <form name="login" id="login" method="POST" action="check_login.php">
    	<input type="text" name="username" id="username" placeholder="Username" required="required" />
        <input type="password" name="password" id="password" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
    </form>
    </div>
EOD;
// $msg = $_GET['msg'];
if($msg!='') echo '<p>'.$msg.'</p>';
echo $login_form;
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>