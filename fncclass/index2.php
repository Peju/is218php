<?php
echo "<h1>Function and Class Homework</h1>";
$hostname = "sql2.njit.edu";
$username = "pjj5";
$password = "VCANKo5hy";


class User{

	var $conn;
	function __construct($hostname,$username,$password){
		try{
			$conn = new PDO("mysql:host=$hostname;dbname=pjj5",
		    $username, $password);
		    echo "Connected successfully <br>";
		}
		catch(PDOException $e)
	    {
	    	echo "Connection failed: " . $e->getMessage();
	    }
		
	}

	//display all users information
	function displaySQL(){
		
		$sql = "SELECT * FROM accounts";
    	
    	$q = $conn->prepare($sql);
		$q->execute();
		$results = $q->fetchAll();

		return $results;
 	   }

 	 //insert a new user
 	 function insertSQL(){
 	 	$sql =  "INSERT INTO accounts VALUES(19, 'pjough17@njit.edu', 'Peter', 'Jough', '917-101-0001', '1998-07-07', 'male', '17171')";

 	 	$q = $conn->prepare($sql);
		$q->execute();
		$results = $q->fetchAll();

		return $results;
 	 }


 	 //delete one user,
	function deleteSQL(){
    	$sql = "DELETE FROM accounts WHERE id = 14";

	    $q = $conn->prepare($sql);
		$q->execute();
		$results = $q->fetchAll();

		return $results;
    }

    //update a user’s password in table
	function updateSQ(){
		$sql = "UPDATE accounts SET password = '123456' WHERE id = 13";
		
		$q = $conn->prepare($sql);
		$q->execute();
		$results = $q->fetchAll();

		return $results;
	}

}



$db = new User($hostname,$username,$password);
$res = $db->displaySQL();
echo count($res);






?>