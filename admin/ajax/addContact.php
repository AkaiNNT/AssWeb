<?php 
	if (isset($_POST['email']) ) {
		include('config.php');

		$email = $_POST['email'];
		$sub = $_POST['sub'];
		$comment = $_POST['comment'];

		try {
			$stmt = $conn->prepare('INSERT INTO contact (Email, Sub, Comment) VALUES (  :Email,:Sub, :Comment)');
			$stmt->bindParam(':Email', $email);
			$stmt->bindParam(':Sub', $sub);
			$stmt->bindParam(':Comment', $comment);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>