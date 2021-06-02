<?php 
	
	header('Content-Type: application/json'); // this means return format is JSON .
	header('Access-Control-Allow-Origin: *' ); // It will allow for All User to access this Page

	include('config.php');

	$data = json_decode(file_get_contents("php://input"), true); // we don't use $_GET and $_POST method , because data can be come from Android App , Apple App etc Website or From different developed designed language sites and  $_GET and $_POST is Only used in PHP websites Only ...
	// And Also true is used for Array ...
	// And Also $data is the data that come from website in JSON Format and We Convert JSON Object to PHP Object using json_decode() function ...

	$student_id = $data['sid'];

	$sql = "SELECT * FROM `student` WHERE id = '$student_id'";
	$sql_r = mysqli_query($conn , $sql);
	// $sql_re = mysqli_fetch_array($sql_r);
	// echo $sql_re['city'];
	if(mysqli_num_rows($sql_r) > 0){
		while($sql_re = mysqli_fetch_assoc($sql_r)){
		//echo $sql_re['city'] . "<br>";
		echo json_encode($sql_re) ; // JSON encode will convert php Object Or Array Object to json ...
	}	
}	
	else{
		//echo "No Rows Are There";
		echo json_encode(array('message' => 'No Record Found...' , 'status' => false)); // Here convert Array to JSON ...
	}
?>
