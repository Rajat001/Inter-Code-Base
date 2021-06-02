<?php 

// Definition :-  Yet, The use of the singleton pattern is justified in those cases where we want to 					  restrict the number of instances that we create from a class in order to save the 					  system resources.
// link :- https://www.geeksforgeeks.org/how-to-create-singleton-design-pattern-in-php-5/
// General singleton class.
class Singleton {
  // Hold the class instance.
  private static $instance = "Calling Singleton Instance";
  
  // The constructor is private
  // to prevent initiation with outer code.
  private function __construct()
  {
    // The expensive process (e.g.,db connection) goes here.
  }
 
  // The object is created from within the class itself
  // only if the class has no instance.
  public static function getInstance()
  {
    if (self::$instance == null)
    {
      self::$instance = new Singleton();
    }
 
    return self::$instance; // we can Only used Private Variable Because of Public Access modifier ...
  }
}

// $SingletonObj = new Singleton;
// echo $SingletonObj = self::getInstance(); // Wrong

echo Singleton::getInstance();

?>