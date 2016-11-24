<?php 
	if (isset($_POST['user_id'])) {
		include('config.php');
		$user_id = $_POST['user_id'];
		try {
			$stmt = $conn->prepare("SELECT * FROM user WHERE id = '$user_id'");
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
    		$stmt->execute();

    		$response = array();

    		while($row = $stmt->fetch()) {
    			$response = $row;
    		}
    		echo json_encode($response);
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>