<?php 
	if (isset($_POST['edit_car_id']) && isset($_POST['edit_car_name']) && isset($_POST['edit_car_year'])) {
		include('config.php');
		$carID = $_POST['carID'];
		$edit_car_id = $_POST['edit_car_id'];
		$edit_car_name = $_POST['edit_car_name'];
		$edit_car_year = $_POST['edit_car_year'];
		try {
			$stmt = $conn->prepare("UPDATE cars 
									SET id=:edit_car_id, 
										name=:edit_car_name, 
										year=:edit_car_year 
									WHERE id=:carID");
			$stmt->bindParam(':edit_car_id', $edit_car_id);
			$stmt->bindParam(':edit_car_name', $edit_car_name);
			$stmt->bindParam(':edit_car_year', $edit_car_year);
			$stmt->bindParam(':carID', $carID);
    		$stmt->execute();
		}
		catch (PDOException $e) {
			echo $e->getMessage();
			exit();
		}
	}
?>