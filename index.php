<!DOCTYPE html>	<!-- In HTML5 there is only one doctype-->

<html>
	<head>
		<meta charset="UTF-8">	<!--the charset attribute specifies the character encoding for the HTML document-->
		<link rel="stylesheet" type="text/css" href="main.css">
		<script type="text/javascript" src="handleinput.js"></script> <!--type : The older HTML4 standard required this attribute to be set, but HTML5 allows it to be absent-->
	</head>
	
	<body onload="load()">

		<input id="txtsearch" type="text" onkeyup="getData(this.value)" placeholder="Search text">
		<input id="txtsearch" type="text" onkeyup="getDbData(this.value)" placeholder="Search DB for lastname">
		<br><br>

		<div id="userdata">
			<b>Person info will be listed here...</b>
		</div>
		
		<h1 class="customtxt">custom txt field</h1>
		
		<h2 id="special1">special txt field</h1>
		
		<p class="customtxt">Dit is wat random tekst</p>
		
		<div>	<?php
	
					echo "php application<br/>";

					
					/*
					if(session_status() == PHP_SESSION_NONE){     //session has not started
						session_start();
						//$_SESSION['session_start'] = date('Y-m-d H:i:s', $_SERVER['REQUEST_TIME']);
							$_SESSION['session_start'] = date('Y-m-d H:i:s', time());
							$_SESSION['owner'] = 'stein';
					//print_r($_SERVER);
						//start session
						//putting an @ before a function call suppresses any errors that may be reported during the course of that function.
						//@session_start();
					}
					
					if (isset($_SESSION['session_start'])){
						echo "session start time: " . $_SESSION['session_start'];
						echo "<br/>". $_SESSION['owner'];
					} else{
						echo "no time";
					}
					//require_once('./classes/first.class.php');
					//$firstobject = new first;

					
					session_status returns the status of the current session. 
					This function can return three different integer values, all of which are available as predefined constants. These are:
					0 – PHP_SESSION_DISABLED: Sessions are currently disabled.
					1 – PHP_SESSION_NONE: Sessions are enabled, but no session has been started.
					2 – PHP_SESSION_ACTIVE: Sessions are enabled and a session has been started.
					If we were to use session_status, our code would look like this:
					
					
					
					//print_r($_SESSION);
					//print_r(session_status());

					*/
					
				
				?>
		</div>

	</body>
</html>