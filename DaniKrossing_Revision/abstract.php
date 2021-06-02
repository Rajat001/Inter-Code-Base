<?php 

// echo "Calling ABSTRACT Class";

abstract class Visa{ // We Can Create An Object Of Abstract Class 
	public function visaPayment(){
		return "Perform a Payment Using <b> <i> Abstract Methods </i> </b>";
	}

	abstract public function getPayment(); // Have to Create an Abstract Function 
}
 
class BuyProduct extends Visa {
	public function getPayment(){
		return $this-> visaPayment();
	}
}

$buyProduct = new BuyProduct();

echo $buyProduct -> getPayment();

?>