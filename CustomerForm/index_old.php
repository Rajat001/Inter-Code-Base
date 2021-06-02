<!DOCTYPE html>
<html>
<head>
	<title> Customer Form </title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

</head>
<body>

	<br><br>
	
		<form name="myForm" role="form" method="POST" action="#" enctype="multipart/form-data" >

		<input type="text" id="name" >

		<br><br>

		<input type="file" id="file_img" >

		<br><br>
		<input type="submit" value="Save" id="save_data" >

	</form>
		<script>

		$(document).ready(function(){
			$("#save_data").on("click" , function(e){
			e.preventDefault();

			var name = $("#name").val();
			var file_img = $('#file_img').val();

			$.ajax({
				url : "submit_data.php",
				type : "POST",
				data : {name_data : name , file_img_data : file_img},
				success: function(data){
					alert("Insertedd ");
				}
			});

		  })
		});

		
		</script>

</body>
</html>