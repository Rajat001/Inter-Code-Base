<?php 
$cars = array (
  array("Volvo",22),
  array("Saab",5),
  array("Land Rover",17),
  array("Volvo",22),
  array("Volvo",22),
  array("Land Rover",17),
);
// echo $cars[0][0];
// echo "<br>";
// echo $cars[1][0];
//print_r(array_unique($cars));
foreach ($cars as $carOptions) {
    foreach ($carOptions as $kebal) {
        if (is_array($kebal)) {
            foreach ($kebal as $katak) {
                echo $katak;
                echo "<br>";
                echo "<br>";            
            }
        } else {
            echo $kebal;
            echo "<br>";
        }
    }
}
?>

<hr><hr>

<?php 

      $arr = array(array('Maruti' , '13'),
               array('Mahindra' , 'Thar'),
               array('Maruti' , '25')
              );

      echo "<pre>";
      print_r($arr);
      echo "</pre>";

      echo "<hr>";
      echo count($arr);
echo "<hr>";


      $keys = array_keys($arr); 
      for($i = 0; $i < count($arr); $i++) { 
      echo "KeyName" .$keys[$i] . "\n"; 
      foreach($arr[$keys[$i]] as $key => $value) { 
      echo $key . " : " . $value . "\n"; 
      } 
      echo "\n"; 
      } 

//       echo "<pre>";
//       print_r($cars);
//       echo "</pre>";

// $arr = array(  
//     array('Roll'=>43, 'name'=>'Geeeks', 'subject'=>'Course-011'), 
//     array('Rool'=>38, 'name'=>'Gfg', 'subject'=>'Course-012'),  
//     array('Rool'=>43, 'name'=>'Geeks', 'subject'=>'Course-011') 
// ); 
      
?>

<hr>

<?php 

  // function myFunction($v){
  //   return ($v+$v);
  // }

  // $a = array(1,2,3,4,5,6);

  // print_r(array_map("myFunction" , $a));

 ?>

