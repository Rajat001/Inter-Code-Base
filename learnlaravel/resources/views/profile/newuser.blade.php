
<center> <h1> -: New User Create :- </h1></center>

<form style="text-align: center;" action="{{ URL::to('save_user') }}" method="POST">
	{{ csrf_field() }}
	<label>Name :- </label>
	<input type="text" name="name">
	<br><br>
	<label>Mobile :- </label>
	<input type="text" name="mobile">
	<br><br>
	<input type="submit" name="Submit Data">

</form>

<a href="{{ url::to('/show_user')}}" style="text-align: center;"> <h1>Show All user</h1>  </a>