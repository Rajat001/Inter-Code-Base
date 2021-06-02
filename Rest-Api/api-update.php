<?php 
	
	header('Content-Type: application/json'); // this means return format is JSON .
	header('Access-Control-Allow-Origin: *' );
	header('Access-Control-Allow-Methods: PUT'); // Format is Insert So Use POST 
	header('Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With'); // Allow All this Parameters Here ...
	
	// X-Requested-With Means Data is Inserted in AJAX Format Only ...

	include('config.php');

	$data = json_decode(file_get_contents("php://input"), true); // we don't use $_GET and $_POST method , because data can be come from Android App , Apple App etc Website or From different developed designed language sites and  $_GET and $_POST is Only used in PHP websites Only ...
	// And Also true is used for Array ...
	// And Also $data is the data that come from website in JSON Format
	
	$student_id = $data['id'];
	$student_name = $data['name'];
	$student_age = $data['age'];
	$student_city = $data['city'];

	
	$sql = "UPDATE `student` SET student_name = '{$student_name}' , age = '{$student_age}' , city = '{$student_city}' WHERE id = '$student_id'";

	if(mysqli_query($conn , $sql)){		
		
		echo json_encode(array('message' => 'Data Updated...' , 'status' => True)); // Here convert Array to JSON ......
	}	
	else{
		
		echo json_encode(array('message' => 'Data Not Updated...' , 'status' => false)); // Here convert Array to JSON ...
	}
?>
