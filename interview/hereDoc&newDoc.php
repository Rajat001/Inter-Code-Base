<?php 
// HereDoc == Double Quote " "
$name ="foo";
$connection = 'Airtel'; // Note :- Below EOT is for Double Quote
echo <<<EOT
Hello $name $connection and GoodBye!
EOT;

# Output :- Hello Airtel and GoodBye!

echo "<hr>";
// NowDoc == Single Quote ' '
$name = "foo";
$connection = "Airtel";   // Note :- Below 'EOT' is for Single Quote
echo <<<'EOT'
Hello $connection and GoodBye!
EOT;
# Output :- Hello $connection and GoodBye!
?>
