<!DOCTYPE html>
<html>
<body>

<?php

// Explaination For json_decode => It will convert JSON Object to PHP Object ...

$jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
 
//var_dump(json_decode($jsonobj));

$json_decode_Obj = json_decode($jsonobj);
echo $json_decode_Obj->Peter;

?>

</body>
</html>