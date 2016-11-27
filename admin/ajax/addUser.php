<?php 
	if (isset($_POST['user_name']) && isset($_POST['user_email'])&& isset($_POST['user_password']) && isset($_POST['user_address']) && isset($_POST['user_fullname']) ) {
		include('config.php');

		$user_name = $_POST['user_name'];
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
		$user_address = $_POST['user_address'];
		$user_fullname = $_POST['user_fullname'];

		try {
			$stmt = $conn->prepare('INSERT INTO user (Username, Email,Password, Address, FullName) VALUES ( :Username, :Email,:Password, :Address, :FullName)');
			$stmt->bindParam(':Username', $user_name);
			$stmt->bindParam(':Email', $user_email);
			$stmt->bindParam(':Password', $user_password);
			$stmt->bindParam(':Address', $user_address);
			$stmt->bindParam(':FullName', $user_fullname);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>