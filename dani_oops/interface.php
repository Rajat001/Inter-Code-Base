<?php 
	
	interface PaymentInterface{
		public function pay();
	}

	class Paytm implements PaymentInterface {
		public function pay(){
			return "Paid Via PayTm";
		}
	}

	class PhonePe implements PaymentInterface {
		public function pay(){
			return "Paid Via PhonePe";
		}
	}

	class BuyProduct{
		public function PayBuy(PaymentInterface $paymentType){
			return $paymentType -> pay();
		}
	}

	$ObjPayTm = new Paytm;	
	$Obj = new BuyProduct;
	echo $Obj -> PayBuy($ObjPayTm);
 ?>