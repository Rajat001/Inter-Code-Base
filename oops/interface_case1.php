<?php 

interface paymentInterface{
	public function payNow();
}

interface LoginInterface{
	public function LoginNow();
}

class PayPal implements paymentInterface , LoginInterface {
	
	public function payNow(){	
		echo "This is An  Pay Pal Method Bro ...";
	}
	public function LoginNow(){
		echo "<br> Also Callig Login Function";
	}
	public function PaymentProcess(){
		$this->payNow();
		$this->LoginNow();
	}
}

class Visa implements paymentInterface {
	public function payNow(){
		echo "We are Calling Visa Method Bro !!!";
	}

	public function PaymentProcess(){
	$this->payNow();
	}
}

class Cash implements paymentInterface {
	public function payNow(){
		echo "We are Calling <b>Cash </b> Method Bro !!!";
	}

	public function PaymentProcess(){
	$this->payNow();
	}
}

class BuyProduct  {
	public function pay(paymentInterface $paymentType){ // Can We Use , and LoginInterface 															both at same time
		 $paymentType->PaymentProcess();
	}
}

$paymentType = new PayPal;
$BuyProductObj = new BuyProduct;
echo $BuyProductObj->pay($paymentType);

?>


