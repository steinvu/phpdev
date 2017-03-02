<?php

If (isset($_GET["q"])){			//check if input value exists and place it in variable
	$searchstring = $_GET["q"];
}

if ($searchstring == "test"){				//if input value equals "test" )> echo detected
	echo "Value 'test' detected!";
}

if ($searchstring == "brol"){				//if input value equals "brol" )> echo detected
	echo "Value 'brol' detected!";
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
	
	// Create connection
	$conn = new mysqli($servername, $username, $password);

	//select database
	$conn->select_db($dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//echo "Connected successfully";

	$sql = "SELECT id, firstname, lastname FROM tbl_person where lastname like '%". $val ."%'";
	//return $sql;
	$result = $conn->query($sql);
	
	return $result;

	$conn->close();
}


function handleResult($result){

$returnval="";

if ($result->num_rows > 0) {
		// output data of each row
		while($row = $result->fetch_assoc()) {
			$value = "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
			$returnval = $returnval . $value . "<br/>";
			
		}
		//return utf8_encode($returnval);
		return $returnval;
	} else {
		return "0 results";

	}

}

?>
