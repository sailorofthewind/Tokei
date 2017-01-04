<?php


// HELPER FUNCTIONS


function escape_string($string) {

	global $connection;

	return mysqli_real_escape_string($connection, $string);

}



function escape_injection($string) {

	return htmlentities($string, ENT_QUOTES, 'UTF-8', false);

}




?>