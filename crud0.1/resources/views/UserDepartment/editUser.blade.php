{{ $user_id[0] -> id  }}


	<form method="POST" action="{{URL::to('/editUserSave/' . $user_id[0] -> id )}}">
		
	  	{{ csrf_field() }}
		User Name :- <input type="text" value="{{ $user_id[0] -> name }}" name="name">
		<br>
		Last Name :- <input type="text" value="{{ $user_id[0] -> lname }}" name="lname">
		<br>
		Email :- <input type="text" value="{{ $user_id[0] -> email }}" name="email">
		<br>
		Mobile :- <input type="text" value="{{ $user_id[0] -> mobile }}" name="mobile">
		<br>
		<input type="submit" value="Update User">

	</form>
