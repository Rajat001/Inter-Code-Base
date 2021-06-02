<?php 
include('config.php');

if($_FILES['file_image']['name'] != ""){
	$filename = $_FILES['file_image']['name'];	
	$name = $_POST['name_data'];
	
	$mobile_data = $_POST['mobile_data'];
	$email_data = $_POST['email_data'];
	$pwd_data = $_POST['txtConfirmPassword'];

	$extension = pathinfo($filename , PATHINFO_EXTENSION);

	$valid_extension = array("jpg","jpeg","png","gif");

	if(in_array($extension, $valid_extension)){
		$new_name = rand() . "." . $extension;
		$path = "customer_file/" . $new_name;


		if(move_uploaded_file($_FILES['file_image']['tmp_name'], $path)){
			
		$sql = "INSERT INTO customer(name ,file_img , mobile , email , pwd) VALUES ('$name','$new_name' , '$mobile_data','$email_data','$pwd_data')";	
		$sql_r = mysqli_query($conn , $sql);

		}else{
			echo "Image is Not Added";
		}
	}
}


 ?>