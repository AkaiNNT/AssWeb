<?php 
	include('config.php');

	$data = '<table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Year</th>
                    <th>Action</th>
                </tr>';

    try {
    	$stmt = $conn->prepare('SELECT * FROM user');	
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	while($row = $stmt->fetch()) {
		    $data .= '<tr>';
		    $data .= '<td>' . $row['ID'] . '</td>';
		    $data .= '<td>' . $row['Username'] . '</td>';
		    $data .= '<td>' . $row['Email'] . '</td>';
		    $data .= '<td>' . $row['FullName'] . '</td>';
		    $data .= '<td>' . $row['Address'] . '</td>';
		    
		    $data .= '<td><button type="button" class="btn btn-primary" onclick="editCar(' . $row['id'] . ')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteCar(' . $row['id'] . ')">Delete</button></td>';
		    $data .= '</tr>';
		}
		$data .= '</table>';
		echo $data;
    }
    catch (PDOException $e) {
		echo $e->getMessage();
		exit();
	}
?>