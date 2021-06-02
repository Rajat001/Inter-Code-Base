<?php 

	interface PayedProcessInterface{
		public function pay();
	}

	interface LoginProcessInterface{
		public function login();
	}

	class PayTm implements PayedProcessInterface , LoginProcessInterface {

		public function pay(){
			return "Paid Via <b><u>PayTm</u></b>";
		}

		public function login(){
			return "login Via <b><u>PayTm</u></b>";
		}

		// Below Is Dummy Purpose Only ...

		public function paymentProcess(){
			return $this -> pay();
			return $this -> login();
		}
	}

	class PhonePe implements PayedProcessInterface{
		public function pay(){
			return "Paid Via <b><u>PhonePe</u></b>";
		}

		public function paymentProcess(){
			return	$this -> pay();				
		}
	}

	class BuyProduct{
		public function PayBuy(PayedProcessInterface $paidMethod){
			return $paidMethod -> pay();
			// return $paidMethod -> login();
		}

		public function OnlinePay(LoginProcessInterface $loginOnline){
			return $loginOnline -> login();
		}
	}

	$ObjPayTm = new PayTm;
	$ObjBuyProduct = new BuyProduct;

	// Below Calling pay() Function
	echo "Case 1 => " . $ObjBuyProduct -> PayBuy($ObjPayTm) . "<br> <br>";

	// Below Calling login() Function
	echo "Case 2 => " . $ObjBuyProduct -> OnlinePay($ObjPayTm) . "<br> <br>";

	$ObjPayTm = new PhonePe;
	$ObjBuyProduct = new BuyProduct;
	echo "Case 3 => " . $ObjBuyProduct -> PayBuy($ObjPayTm);

 ?>