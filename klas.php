<?php  // Example 1
echo " Wie zit er in de klas? ";
$a  = readline();
$b = explode(" ", $a);
foreach ($b as $key => $value) {
  print( "$value" );
}
echo " De studenten in de klas zijn: ";
foreach ($b as $key => $value) {
  print("$value" . PHP_EOL);
}

?>
