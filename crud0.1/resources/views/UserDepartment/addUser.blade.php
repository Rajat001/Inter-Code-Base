<h1 style="text-align: center;">  Add New User Into Database </h1>


<div>
	
	<form method="POST" action="{{URL::to('/saveUser')}}">
		
	  	{{ csrf_field() }}
		User Name :- <input type="text" name="name">
		<br>
		Last Name :- <input type="text" name="lname">
		<br>
		Email :- <input type="text" name="email">
		<br>
		Mobile :- <input type="text" name="mobile">
		<br>

		<input type="submit" value="Create New User">
	</form>



<ul>
	@foreach($all_user  as $all_users)

	<li>
	<a href="{{ URL::to('/editUser/' . $all_users -> id )}}"> {{ $all_users -> name }} </a>			
	</li>

	@endforeach
</ul>

</div>