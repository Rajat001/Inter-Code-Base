<?php 

function showMessage($hello = false){
  echo ($hello) ? 'hello' : 'bye';
}


echo showMessage();

?>