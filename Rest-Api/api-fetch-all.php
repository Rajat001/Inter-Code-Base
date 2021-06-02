<!-- https://www.youtube.com/watch?v=arfKoJ-PK38&list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs&index=198 -->
<!-- /* JSON tutorials By Yahoo Baba */ -->
<?php 
	header('Content-Type: application/json'); // this means return format is JSON .	
	header('Access-Control-Allow-Origin: *' ); // It will allow for All User to access this Page
	include('config.php');
	$sql = "SELECT * FROM `student`";
	$sql_r = mysqli_query($conn , $sql);
	// $sql_re = mysqli_fetch_array($sql_r);
	// echo $sql_re['city'];
	if(mysqli_num_rows($sql_r) > 0){
		while($sql_re = mysqli_fetch_assoc($sql_r)){
		//echo $sql_re['city'] . "<br>";
		echo json_encode($sql_re) ; // json encode will convert php Object to json And 								   convert Array to JSON ......
	}
		echo "<br>";

}	
	else{
		//echo "No Rows Are There";
		echo json_encode(array('message' => 'No Record Found...' , 'status' => false)); // Here convert Array to JSON ...
	}
?>
