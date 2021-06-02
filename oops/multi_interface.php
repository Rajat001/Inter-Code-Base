<?php 
//  src :- https://www.youtube.com/watch?v=dk_1Q_LB14k&t=125s     @ 14:59 Duration
//  By Peter Fisher .. YouTube

interface StandardPaymentInterface{
	public function pay();
	// public function fraudCheck();
}

interface TransactionCheckInterface{
	public function fraudCheck(); 
}

interface PaynowInterface{
	public function payNow();
}

class PayFee implements StandardPaymentInterface , PaynowInterface{
	public function pay(){
		return "this is PayFee Function";
	}

	public function payNow(){
		return $this->pay();
	}
}

class WorldFee implements StandardPaymentInterface , PaynowInterface , TransactionCheckInterface{
	public function pay(){
		echo "this is WorldFee Function" ;
	}
	public function fraudCheck(){
		echo "Hello Fraudster";
	}

	public function payNow(){
		echo $this->fraudCheck();
		echo $this->pay();
	}
}

class MintFee implements StandardPaymentInterface{
	public function pay(){}
}

class PaymentGateway{
	public function takePayment(StandardPaymentInterface $paymentType){
		//return $paymentType->pay();
		return $paymentType->payNow();
	}
}

$paymentType = new WorldFee(); // Use without normal Brackets...
$gateway = new PaymentGateway();
echo $gateway -> takePayment($paymentType);
?>