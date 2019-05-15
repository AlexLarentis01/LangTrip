<?php

/**
 * 
 */
class db2_connector{
	
	//Free Spaces
	$freeSpces;

	//DB Information 
	$servername = "localhost";
	$username = "root";
	$password = "";

	$db_name = "";
	
	function __construct(argument)
	{
		//
	}


  	function db2_connect(){
		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}else{
			return $conn;
		}
		echo "Connected successfully";
		
    }

    function db2_close(connection){
     	connection->close();
    }


    function getFreeSpaces(connection){
    	$tableName = "generalInfo";

    	$sql = "SELECT freeSpces FROM " . $tableName;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        echo "id: " . $row["freeSpces"];
		    }
		} else {
		    echo "0 results";
		}
    }

}

	
?>