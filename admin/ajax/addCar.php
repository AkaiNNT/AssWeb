<?php 
	if (isset($_POST['car_id']) && isset($_POST['car_name']) && isset($_POST['car_year'])) {
		include('config.php');

		$car_id = $_POST['car_id'];
		$car_name = $_POST['car_name'];
		$car_year = $_POST['car_year'];

		try {
			$stmt = $conn->prepare('INSERT INTO cars (id, name, year) values (:id, :name, :year)');
			$stmt->bindParam(':id', $car_id);
			$stmt->bindParam(':name', $car_name);
			$stmt->bindParam(':year', $car_year);
			$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>