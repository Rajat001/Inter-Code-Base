

<ul>
	@foreach($profile->all() as $profilee)
	<li>  <a href="edit_user/{{ $profilee ->id }}"> {{ $profilee ->name }} </a>  &nbsp; &nbsp; &nbsp; {{ $profilee ->name  . "  ---  " .$profilee ->mobile }} </li>
	@endforeach
</ul>

<a href="{{ URL::to('/') }}">
	<input type="button" value="Add User">
</a>
