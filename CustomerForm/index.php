<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form id="submit_form" name="myForm" >
			<label>Name </label> :
		<input type="text" name="name_data" id="name_data" >
		<span id="lblError" style="color: red"></span>
		<br><br>
			<label>Mobile Number </label> :
		<input type="text" name="mobile_data" id="mobile_data" >		
		<span id="lblErrorMobile" style="color: red"></span>

		<br><br>
			<label>Email Id </label> :
		<input type="email" name="email_data" id="email_data" >
		<br><br>
			<label>Password </label> :
		<input type="password" name="txtNewPassword" id="txtNewPassword" >
		<br><br>
		<!-- Start-->
		<!-- 	<label>Passwod One</label>
		<input type="password" id="txtNewPassword" placeholder="Enter passward" name="pass">
		<br><br> -->
	
		<label> Confirm Passwod :  </label>
		<input type="text" id="txtConfirmPassword" name="txtConfirmPassword" placeholder="Confirm Passward" name="confpass" >

		<div class="registrationFormAlert" style="color:green;" id="CheckPasswordMatch">
		</div>
		<br><br>
		
		<!-- End -->
		<label>Upload Image</label> :
		<input type="file" name="file_image" id="upload_image">
		<br>
		<p>Upload Only <span style="color:red;">".jpg",".jpeg",".png",".gif" </span> Extensions </p>
		<br>
		<input type="submit" name="upload_button" id="upload_btn" value="Save">
	</form>

	<div id="responsecontainer" align="center">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script type="text/javascript">

	   $(function () {
        $("#name_data").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            $("#lblError").html("");
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[a-zA-Z\s]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                $("#lblError").html("Only Alphabets allowed <b> Not Numeric!!! </b>");
            }	
 
            return isValid;
        });

        // Start Mobile
        var mobile_len = $("#mobile_data").val();
		$("#mobile_data").keypress(function (e) {
		//if the letter is not digit then display error and don't type anything
		if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
		//display error message
		$("#lblErrorMobile").html("Digits Only");
		return false;
		}else if($("#mobile_data").val().length >= 10){
		$("#lblErrorMobile").html("Less Than 10 Digit Only");
		return false;	
		}
		});

        // End Mobile
    });

		function checkPasswordMatch() {
		var password = $("#txtNewPassword").val();
		var confirmPassword = $("#txtConfirmPassword").val();
		if (password != confirmPassword)
		$("#CheckPasswordMatch").html("Passwords does not match!");
		else
		$("#CheckPasswordMatch").html("Passwords match.");
		}

		$(document).ready(function () {
		$("#txtConfirmPassword").keyup(checkPasswordMatch);
		});

	$(document).ready(function(){		
		var password = $("#txtNewPassword").val();
		var confirmPassword = $("#txtConfirmPassword").val();

		$("#upload_btn").click(function(){
			if($("#name_data").val().length === 0){
				alert("Name Field Cannot Be Empty");
				$("#name_data").focus();
				return false;
			}
			else if($("#mobile_data").val().length === 0){
				alert("Mobile Field Cannot Be Empty");
				$("#mobile_data").focus();
				return false;	
			} 
			else if($("#email_data").val().length === 0){
				alert("Email Field Cannot Be Empty");
				$("#email_data").focus();
				return false;	
			}
			else if($("#txtNewPassword").val().length === 0){
				alert("Password Field Cannot Be Empty");
				$("#txtNewPassword").focus();
				return false;	
			}
			

			else if(parseInt($("#txtNewPassword").val()) != parseInt($("#txtConfirmPassword").val())){
				alert("Password Not Matched");
				$("#txtConfirmPassword").focus();
				return false;	
			}
		});

				// For Getting Data From Database without Page Reload Starts
		//   $("#display").click(function() {  
		
		$.ajax({    //create an ajax request to display.php
		type: "GET",
		url: "getDataAjax.php",             
		dataType: "html",   //expect html to be returned                
		success: function(response){                    
		$("#responsecontainer").html(response); 
		//alert(response);
		}
		});

		// });
		// Ends

		$("#submit_form").on("submit", function(e){

			e.preventDefault();
			var formData = new FormData(this);
			
			$.ajax({
				url : "upload_ajax.php",
				type : "POST",
				data : formData,
				contentType : false,  // multipart/form-data
				processData : false,

				success: function(data){
					//alert("Data Inserted ");
					$( "#responsecontainer" ).load( "getDataAjax.php" );
					$("#upload_image").val(""); // Empty Data of upload_image id .
					$("#name_data").val("");
					$("#mobile_data").val("");
					$("#email_data").val("");
					$("#txtNewPassword").val("");
					$("#txtConfirmPassword").val("");
				}
			});
	

		});



	});
</script>

</body>
</html>

<!-- Below Is For Password Check ::--
https://www.studentstutorial.com/code-editor/?topic=jquery&file_name=confirmpass_validate  -->