<?php 
	if (isset($_POST['car_id'])) {
		include('config.php');
		$car_id = $_POST['car_id'];
		try {
			$conn->exec("DELETE FROM cars WHERE id = '$car_id'");
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>