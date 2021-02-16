<?php

error_reporting(0);

$conexiune=mysqli_connect('localhost','root','','proiectbdr');
if(!$conexiune)
{
	die('Nu s-a putut realiza conexiunea!'.mysql_error());	
}

mysqli_select_db($conexiune,proiectbdr);

?>