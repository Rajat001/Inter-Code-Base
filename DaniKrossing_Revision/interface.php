<?php 

interface PaymentMethodInterface{
	public function payNow();
}

interface LoginFirstInterface{
	public function loginFirst();
}

class PayPal implements PaymentMethodInterface , LoginFirstInterface{
	 public function loginFirst(){
	 	return "Login Application Via PAYPAL";
	 }

	 public function payNow(){
	 	return "Here Is PAYPAL Method Is Called";
	 }

	 public function paymentProcess(){
	 	return $this -> payNow();
	 	return $this -> loginFirst(); 
	 }
}

class Visa implements PaymentMethodInterface{
	 public function payNow(){
	 	return "Here Is VISA Method Is Called";
	 }
}

class Cash implements PaymentMethodInterface{
	 public function payNow(){
	 	return "Here Is Cash Method Is Called";
	 }
}


class BuyProduct{
	 public function purchaseProduct(PaymentMethodInterface $paymentMethod){
	 	return $paymentMethod -> paymentProcess(); // नोट रन 
	 	//return $paymentMethod -> payNow();
	}
}

$Cash = new PayPal;

$CheckPaymentMethod = new BuyProduct;
echo $CheckPaymentMethod -> purchaseProduct($Cash)

?>