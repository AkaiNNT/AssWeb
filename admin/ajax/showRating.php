<?php 
	include('config.php');

	$data = '<table class="responstable">
                <tr>
                    <th>ID</th>
                    <th>UserID</th>
                    <th>ProductID</th>
                    <th>Star</th>
                </tr>';

    try {
    	$stmt = $conn->prepare('SELECT * FROM rating');	
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	while($row = $stmt->fetch()) {
		    $data .= '<tr>';
		    $data .= '<td>' . $row['ID'] . '</td>';
		    $data .= '<td>' . $row['UserID'] . '</td>';
		    $data .= '<td>' . $row['ProductID'] . '</td>';
		    $data .= '<td>' . $row['Star'] . '</td>';

		    $data .= '<td><button type="button" class="btn btn-primary" onclick="editRating(' . $row['ID'] . ')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteRating(' . $row['ID'] . ')">Delete</button></td>';
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