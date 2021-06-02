<?php 

//  Created And Run By Rajat Singh On 30 / 09 / 2020

abstract class Person{
  public $firstName;
  private $lastName;
  protected $companyName;
 
abstract public function PersonDetails($f, $l, $c); // Method Same Name Always Called 
 
}

 class Company extends Person{
  
   public function PersonDetails($f , $l , $c){
      return $this->firstName = $f . " <br> Last Name " . $this->lastName = $l . " <br> Company " . $this->companyName = $c ;
    }

}

$companyObj = new Company;
echo $companyObj -> PersonDetails('Rajat' , 'Singh' , 'UPSC');

 ?>