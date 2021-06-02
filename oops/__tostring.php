<?php
class Student {
    private $name;
    private $email;
 
    public function __construct($name, $email) 
    {
        $this->name = $name;
        $this->email = $email;
    }
 
    public function __toString()
    {
        return 'Student name: '.$this->name
        . '<br>'
        . 'Student email: '.$this->email;
    }
}
 
$objStudent = new Student('John', 'john@tutsplus.com');
echo $objStudent;  // Here using _toString() we don't need to call $name And $email Object For eg. $objStudent -> name  && $objStudent -> email  ...
?>