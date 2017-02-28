<?php

echo "php application<br/>";

require_once('./classes/first.class.php');

$firstobject = new first;

/*
session_status returns the status of the current session. 
This function can return three different integer values, all of which are available as predefined constants. These are:
0 – PHP_SESSION_DISABLED: Sessions are currently disabled.
1 – PHP_SESSION_NONE: Sessions are enabled, but no session has been started.
2 – PHP_SESSION_ACTIVE: Sessions are enabled and a session has been started.
If we were to use session_status, our code would look like this:
*/
print_r($_SESSION);
print_r(session_status());

if(session_status() == PHP_SESSION_NONE){     //session has not started
    session_start();
	//$_SESSION['session_start'] = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
		$_SESSION['session_start'] = date('Y-m-d H:i:s', time());
print_r($_SERVER);
	//start session
	//putting an @ before a function call suppresses any errors that may be reported during the course of that function.
	//@session_start();
}

/*
PHP superglobals
print_r($GLOBALS);echo "<br/><br/><br/><br/>";
print_r($_SERVER);echo "<br/><br/><br/><br/>";
print_r($_GET);echo "<br/><br/><br/><br/>";
print_r($_POST);echo "<br/><br/><br/><br/>";
print_r($_FILES);echo "<br/><br/><br/><br/>";
print_r($_COOKIE);echo "<br/><br/><br/><br/>";
print_r($_SESSION);echo "<br/><br/><br/><br/>";
print_r($_REQUEST);echo "<br/><br/><br/><br/>";
print_r($_ENV);echo "<br/><br/><br/><br/>";
*/

print_r($_SESSION);
print_r(session_status());


/*

// remove all session variables
	session_unset(); 

// destroy the session 
	session_destroy(); 

*/

?>