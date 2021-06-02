<?php 

	interface PaymentWay{
		public function pay();
	}

	class Visa implements PaymentWay{
		public function pay(){
			return "Paid Via <b> <u> <i> VISA </i> </u> </b> Payment Method";
		}
	}

	class PhonePe implements PaymentWay{
		public function pay(){
			return "Paid Via <b> <u> <i> PhonePe </i> </u> </b> Payment Method";
		}
	}

	class BuyProduct{
		public function BuyPay(PaymentWay $PaymentMethod){
			return $PaymentMethod->pay();	
		}
	}

	$VisaPayment = new Visa;
	$PhonePayment = new PhonePe;
	$BuyProductObj = new BuyProduct;

	echo $BuyProductObj -> BuyPay($PhonePayment);

 ?>