<?php

require_once("config.php");
//Posso criar o arquivo config.php para substituir o session_start(); logo ele estará somente uma vez no meu programa
//session_start();

echo $_SESSION["nome"];

//session_unset('nome');

//echo $_SESSION["nome"];


//session_destroy();

?>