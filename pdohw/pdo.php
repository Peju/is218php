<?php
echo "<h1>PDO Homework</h1>";
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
	    if($q->rowCount()){
	    	echo "<table border=\"1\"><tr><th>Record</th><th>Email</th></tr><br>";
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