<?php
echo "<h1>Function and Class Homework</h1>";
$hostname = "sql2.njit.edu";
$username = "pjj5";
$password = "VCANKo5hy";
// try {
	    $conn = new PDO("mysql:host=$hostname;dbname=pjj5",
	    $username, $password);
	    echo "Connected successfully <br>";
	   // $sql = "SELECT * FROM accounts";
	 //	$sql =  "INSERT INTO accounts VALUES(19, 'pjough17@njit.edu', 'Peter', 'Jough', '917-101-0001', '1998-07-07', 'male', '17171')";
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll();

		
	    /*

	    //echo "The total result is ".count($results)."<br>";
	    
	    ////////////////////////////////////////////////////////////////////
	    
	    class User{

	    	var $conn;
	    	function __construct(){
	    		$conn = new PDO("mysql:host=$hostname;dbname=pjj5",
	    $username, $password);
	    	}

	    	//display all users information
	    	function displaySQL(){
	    		$diSQL = "SELECT* FROM accounts";
		    	
		    $q = $conn->prepare($sql);
	    	$q->execute();
	    	$results = $q->fetchAll();

	    	return $results;
		 	   }
/*	
		    //insert a new user
		    function insertSQL($id, $email, $fname, $lname, $cell, $bday, $gender, $pword){
		    	$this->infostuff = $id, $email, $fname, $lname, $cell, $bday, $gender, $pword;
		    }

		    //delete one user,
		    function deleteSQL(){
		    	//$deSQL = "DELETE FROM accounts WHERE id = 14";
		    }

		    //update a user’s password in table
		    function updateSQ(){
		    	//$upSQL = "UPDATE accounts SET password = '123456' WHERE id = 13";
		    }




	    }

	    
	    displaySQL("INSERT INTO accounts VALUES(19, 'pjough17@njit.edu', 'Peter', 'Jough', '917-101-0001', '1998-07-07', 'male', '17171')");

	    // $sql = displaySQL();
	    




	    ////////////////////////////////////////////////////////////////////


	    if($q->rowCount()){
	    	echo "<table border=\"2\"><tr><th>Command</th><th>Result</th></tr><br>";
	    	foreach ($results as $row) {
        		echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
    		}
	    }else{
	    	echo '0 results';
	    } 
    }
catch(PDOException $e)
    {
    	echo "Connection failed: " . $e->getMessage();
    }
$conn = null;*/
?>