<?php 
	if (isset($_POST['edit_user_name']) ) {
		include('config.php');
		$userID = $_POST['userID'];
		$edit_user_name = $_POST['edit_user_name'];
		$edit_user_fullname = $_POST['edit_user_fullname'];
		$edit_user_address = $_POST['edit_user_address'];
		$edit_user_password = $_POST['edit_user_password'];
		$edit_user_email = $_POST['edit_user_email'];
		try {
			$stmt = $conn->prepare("UPDATE user SET
										Email=:edit_user_email, 
										Username=:edit_user_name, 
										Address=:edit_user_address,
										FullName=:edit_user_fullname,
										Password=:edit_user_password 
									WHERE ID=:userID");
			$stmt->bindParam(':edit_user_name', $edit_user_name);
			$stmt->bindParam(':edit_user_fullname', $edit_user_fullname);
			$stmt->bindParam(':edit_user_address', $edit_user_address);
			$stmt->bindParam(':edit_user_password', $edit_user_password);
			$stmt->bindParam(':edit_user_email', $edit_user_email);
			$stmt->bindParam(':userID', $userID);
    		$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>