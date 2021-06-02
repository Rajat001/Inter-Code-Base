<!DOCTYPE html>
<html>
<head>
	<title> User Create </title>
</head>
<body>


	<form method="POST" action="{{ URL::to('/addUser') }}">
	{{ csrf_field() }}
	<label> Name :- </label>
	<input type="text" name="name"> <br>
	<label> Mobile :- </label>
	<input type="text" name="mobile"> <br>
	<label> City :- </label>
	<input type="text" name="city"> <br><br>

	<input type="submit">
	
	</form>

</body>
</html>