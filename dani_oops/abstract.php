<?php 

abstract class Visa {
 	public function visaPayment(){
 		return "<b>Perform </b>  <u> A </u> Payment";
 	}

 	abstract public function getPayment();
 }

 class BuyProduct extends Visa {   // Extends Means Inheritance 
 	public function getPayment(){
 		return $this -> visaPayment();
 	}
 }


$buyProduct = new BuyProduct();
echo $buyProduct-> getPayment();

?>