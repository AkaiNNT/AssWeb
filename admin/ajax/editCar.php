<?php 
	if (isset($_POST['car_id'])) {
		include('config.php');
		$car_id = $_POST['car_id'];
		try {
			$stmt = $conn->prepare("SELECT * FROM cars WHERE id = '$car_id'");
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