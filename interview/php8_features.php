<?php 
// https://www.youtube.com/watch?v=sBwsyzBRSAQ&t=1s
// Union Types ..  (1. Feature)
// Def. :- Type Declaration with multiple type of Data ...

class Calculator{
	public function add(int|string $a , int|string $b) : int|string{
		if(is_string($a) && is_integer($b)){
				return $a + $b;
		}

		if(is_string($a) && is_integer($b)){
				return $a * $b;
		}
	}
}

///  Match Expression .. (2. Feature)

	class Match{
		public function MatchExample(){
			$statusCode = 200;

			switch($statusCode){
				case 200:
				return "Commands Match";

				case 201:
				return "Showing Error And Not Matched To Code 200";
			}
		}
	}

	return match($statusCode){ // In this Match Expression Data type is Strict ...
		200 , 201 => "Success and Match to Records...",
			  400 => "Not Matched to Record 200",
			  default => 'Unknown Status bind_textdomain_codeset(domain, codeset)',
	}

 ?>



 <!-- (3. Named Arguments)  --:> While Calling Property the Named Argument Shall Be called in any kind of Sequence manner -->

<!-- (4. Constructor Property )  -->


<!-- (4. NULL Safe Operator )  -->


<?php 

$email = NULL;

if($session != null){
	$user = $session -> user;
}

if($user != null){
	$profile = $user ->profile; 
}

if($profile != null){
	$email = $profile->email;
}

return $email;

$email = $session?->user?->profile?->email; // Here ?-> is called Null Safe Operator

 ?>