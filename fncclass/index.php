<?php
echo "<h1>Function and Class Homework</h1>";
$hostname = "sql2.njit.edu";
$username = "pjj5";
$password = "VCANKo5hy";
try {
	    $conn = new PDO("mysql:host=$hostname;dbname=pjj5",
	    $username, $password);
	    echo "Connected successfully <br>";
	    $sql = "SELECT id, email FROM accounts WHERE id < 6";
	 	
	    $q = $conn->prepare($sql);
	    $q->execute();
	    $results = $q->fetchAll();

	  
	    echo "The total result is ".count($results)."<br>";
	    
	    ////////////////////////////////////////////////////////////////////
	    
	    class User{

	    	//display all users information
	    	function displaySQL(){
	    		$diSQL = "SELECT* FROM accounts";
		    }

		    //insert a new user
		    function insertSQL(){
		    	$inSQL = "INSERT INTO accounts VALUES(19, 'pjough17@njit.edu', 'Peter', 'Jough', '917-101-0001', '1998-07-07', 'male', '17171')";
		    }

		    //delete one user,
		    function deleteSQL(){
		    	//$deSQL = "DELETE FROM accounts WHERE id = ";
		    }

		    //update a user’s password in table
		    function updateSQ(){
		    	//$upSQL = "UPDATE accounts SET password = '123456' WHERE id = 7";
		    }

	    }

	    ////////////////////////////////////////////////////////////////////


	    if($q->rowCount()){
	    	echo "<table border=\"1\"><tr><th>ID</th><th>Email</th></tr><br>";
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
$conn = null;
?>