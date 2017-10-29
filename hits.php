<?php

require("functions.php");

//HitCounter("counter.txt", "reset");


$result = HitCounter("counter.txt", "get");
$ipsAll = array();
//$result[1]<br />";

//$lines  = explode("::", $result[2][0]);
//print_r( $lines);

echo "<hr>";

foreach ($result[2] as $line)
{
 $i = explode("::", $line);
 array_push($ipsAll, $i[0]);
  foreach($i as $ii) 
   {
     echo "$ii <br />";
   }
  echo "<hr>";
}

//print_r($ipsAll);

echo "Raw: $result[0] / Unique: " . count(array_unique($ipsAll));

?>