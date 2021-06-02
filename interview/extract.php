    <?php 
      
    // input array 
    $state = array("AS"=>"ASSAM", "OR"=>"ORRISA", "KR"=>"KERELA"); 
      
    extract($state); 
      
    // after using extract() function 
    
    // Using Extract Function , we Output the Key Value , i.e $AS = ASSAM

    echo"\$AS is $AS\n\$KR is $KR\n\$OR is $OR"; 
      
    ?>