<?php 

interface Person{
	public function Name();  // Method For Class Here ...
	public function Country();
}

class India implements Person{
	public function Name(){
		return "Indian Person";
	}

	public function Country(){
		return "India -- [Country]";
	}
}

class USA implements Person{
	public function Name(){
		return "USA Person";
	}

	public function Country(){
		return "USA -- [Country]";
	}
}

class Australia implements Person{
	public function Name(){
		return "Australian Person";
	}

	public function Country(){
		return "Australia -- [Country]";
	}
} 

Class World{
	public function smallWorld(Person $worldDetails){ // Acc to Interface , $worldDetails will be called Class i.e 															 India , USA , Australia ...
		return $worldDetails->Name();
	}
}


$IndiaObject = new India;

$WorldObject = new World;
echo $WorldObject->smallWorld($IndiaObject);

echo "<hr>";

$USAObject = new USA;

// $WorldObject = new World;
echo $WorldObject->smallWorld($USAObject);

echo "<hr>";

$AustraliaObject = new Australia;

// $WorldObject = new World;
echo $WorldObject->smallWorld($AustraliaObject);

?>