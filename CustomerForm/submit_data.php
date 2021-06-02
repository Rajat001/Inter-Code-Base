<?php 

include('config.php');

if($_POST['name_data']){   

$name = $_POST['name_data']; 
 
// $sourcePath = $_FILES['file_img_data']['tmp_name'];
// $targetPath = "customer_file/".$_FILES['file_img_data']['name'];
// move_uploaded_file($sourcePath,$targetPath);

$img = $_POST['file_img_data'];
$folderPath = "customer_file/";


$sql = "INSERT INTO customer(name, file_img) VALUES ('$name', '$fileName')";	

$sql_r = mysqli_query($conn , $sql);

if($sql_r){
echo "Added";
}else{
echo " Not Added";
}		


}


//

?>