<?php
$invoer = $argv[1];
$geld = intval($invoer);
$pos = strpos($argv[1], " ");

if (is_numeric($invoer)) { 
    $posint = (int)$argv[1];
    echo ($posint . " X 1 euro");
    
} else {
   echo ("Geen wisselgeld");
}
?>