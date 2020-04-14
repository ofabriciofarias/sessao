<?php

//Falha de segurança pelo session que pode ocorrer.
session_id('v8hmittol1ffaokaidp70mobls');

require_once("config.php");

session_regenerate_id();

echo session_id();

echo "<br>";

var_dump($_SESSION);

?>
