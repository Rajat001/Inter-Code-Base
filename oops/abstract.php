<?php 

abstract class Visa {
	public function visaPayment(){
		return "Perform a Visa Payment Bro";
	}

	abstract public function getPayment();
}


class BuyProduct extends Visa {
	public function getPayment(){
		return $this -> visaPayment();
	}
}


$buyProduct = new BuyProduct();
echo $buyProduct-> getPayment();

echo "<br>";


$classVisaObj = new Visa();
echo $classVisaObj -> visaPayment(); // Gives Error As We cannot create Object on abstract class ...
 ?>