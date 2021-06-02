<!DOCTYPE html>
<html>
<head>
	<title> </title>
</head>
<body>
	<div id="main">
		<div id="header">
			<h1>Read JSON Data</h1>
		</div>

		<div id="load-data">
			
		</div>
	</div>
<script type="text/javascript" src="js/jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$.ajax({
			url : "https://jsonplaceholder.typicode.com/posts",
			type : "GET",
			success: function(data){
				//console.log(data);
				//$("#load-data").append(data.id + " <br> " + data.title + " <br> " + data.body);
				$.each(data, function (key , value){
				$("#load-data").append(value.id + " <br> " + value.title + " <br> " + value.body + " <br> <br>" );
				});
			}
		});
	});
</script>
</body>
</html>