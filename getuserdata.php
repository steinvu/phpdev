<?php

If (isset($_GET["q"])){			//check if input value exists and place it in variable
	$searchstring = $_GET["q"];
	
	switch($searchstring){
		case "test": echo "case TEST!";
					 break;
		case "brol": echo "case BROL!";
					 break;
		default: break;
	}
}


If (isset($_GET["selection"])){			//check if input value exists and place it in variable
	$searchstring = $_GET["selection"];
	
	switch($searchstring){
		case "1": echo "eerste in lijst";
					 break;
		case "2": echo "tweede in lijst";
					 break;
		case "3": echo "derde in lijst";
					 break;
		case "4": echo "vierde in lijst";
					 break;
		default: break;
	}
}



If (isset($_GET["qdb"])){			//check if input value exists and place it in variable
	$searchdbstring = $_GET["qdb"];
	//echo getQueryResult($searchdbstring);

	echo handleResult(getQueryResult($searchdbstring));
}


function getQueryResult($val){
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$dbname = "phpdb";
	
	$conn = new mysqli($servername, $username, $password);
	$conn->select_db($dbname);
	
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT id, firstname, lastname FROM tbl_person where lastname like '%". $val ."%'";

	$result = $conn->query($sql);
	
	return $result;

	$conn->close();
}


function handleResult($result){

//$returnval="";

	if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$value = "ID: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			$returnval = $returnval . $value . "<br/>";
			
		}
		return utf8_encode($returnval);
		//return $returnval;
	} else {
		return "0 results";

	}

}

?>
