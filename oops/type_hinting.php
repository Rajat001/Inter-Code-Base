<?php 
// Link :- https://www.youtube.com/watch?v=9VbuI7Lveuw&t=144s
// class Sum{
// 	public $a;
// 	public $b = 2;

// 	public function add(string $a){
// 		return $this->a = $a ;
// 	}
// }
// $sum_value = new Sum;
// echo $sum_value->add('Hllo' );

class Book {
	public $price;
	public function price(int $price){ // this we called Type Hinting ...
			$this->price = $price;
	}
}

	$book = new Book;
	$book -> price(20);
	echo $book ->price; // It Will Show Error Bcz TypeHinting Supports in 7 Above 						    Verison Not , Below 7 Version of PHP
?>