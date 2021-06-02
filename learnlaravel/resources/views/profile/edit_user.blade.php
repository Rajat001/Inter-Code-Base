<!-- {{ $profile[0]->id}} -->


<center> <h1> -: Edit User :- </h1></center>

<form style="text-align: center;" action="{{ URL::to('edit_user_data/' . $profile[0]->id) }}" method="POST">
	{{ csrf_field() }}
	<label>Name :- </label>
	<input type="text" name="name" value="{{ $profile[0]->name }}">
	<br><br>
	<label>Mobile :- </label>
	<input type="text" name="mobile" value="{{ $profile[0]->mobile }}">
	<br><br>
	<input type="submit" value="Edit User">

</form>