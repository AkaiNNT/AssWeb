<?php 
	include('config.php');

	$data = '<table class="table table-bordered table-striped">
                <tr>
                    <th>ID</th>
                    <th>UserID</th>
                    <th>Sub</th>
                    <th>Comment</th>
                </tr>';

    try {
    	$stmt = $conn->prepare('SELECT * FROM contact');	
    	$stmt->setFetchMode(PDO::FETCH_ASSOC);
    	$stmt->execute();
    	while($row = $stmt->fetch()) {
		    $data .= '<tr>';
		    $data .= '<td>' . $row['ID'] . '</td>';
		    $data .= '<td>' . $row['UserID'] . '</td>';
		    $data .= '<td>' . $row['Sub'] . '</td>';
		    $data .= '<td>' . $row['Comment'] . '</td>';

		    $data .= '<td><button type="button" class="btn btn-primary" onclick="editUser(' . $row['ID'] . ')">Edit</button><button type="button" class="btn btn-danger" onclick="deleteUser(' . $row['ID'] . ')">Delete</button></td>';
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