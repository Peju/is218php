<?php

$date = date('Y/m/d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

/////////////////////////////////////////////////

if ($date > $tar && $date+$tar >0){
	echo "The future<br>";
}
else if ($date+$tar == 0){
	echo "Oops<br>";  
}
else{
	echo "The past<br>";
}

/////////////////////////////////////////////////
echo "The positions are...<br>";
echo strpos($date,"/")." ";
echo strrpos($date,"/")."<br>";

/////////////////////////////////////////////////

echo "The word count for \$date is ".str_word_count($date)."<br>";

echo "The string length of \$date is ".strlen($date)."<br>";

/////////////////////////////////////////////////

$stringHW = "bob likes food";

echo ord($stringHW)."<br>";

/////////////////////////////////////////////////

echo substr($date,-2)."<br>";

/////////////////////////////////////////////////

$dateExplode = explode("/",$date);
echo $dateExplode[0]." ";
echo $dateExplode[1]." ";
echo $dateExplode[2]."<br>";
/////////////////////////////////////////////////

$year = array("2012", "396", "300","2000", "1100", "1089");

foreach($year as &$value)
{
	if($value % 4 == 0 && $value % 100 == 0 && $value % 400 == 0){
		echo "True"." ";
	}
	elseif($value % 4 == 0 && $value % 100 != 0){
		echo "True"." ";
	}
	else{
		echo "False"." ";
	}

}
//use position of array to increment
echo "<br><br>";

//I understand the logic and the formatting is wrong(partially)
$switchT = 0;
foreach($year as &$value)
{
	if($value % 4 == 0 && $value % 100 == 0 && $value % 400 == 0){
		$switchT += 1;
	}
	elseif($value % 4 == 0 && $value % 100 != 0){
		$switchT += 2;
	}
	else{
		$switchT += 0;
	}
	
	switch($switchT){
		case 1:
			echo "leap yr"." ";
			break;
		case 2:
			echo "leap yr"." ";
			break;
		case 0:
			echo "leap yr"." ";
			break;
		default:
			echo "N/A"." ";
			break;
	}		
}

/*
for ($i = 0; $i <= 6; $i++)
{
	if($year % 4 > 0 && $value % 100 > 0 && $value % 400 > 0){
		echo "True"." ";
	}
	elseif($value % 4 > 0 && $value % 100 > 0){
		echo "True"." ";
	}
	else{
		echo "False"." ";
	}
}
*/


echo "<br>The value of \$year: ";
print_r($year)

?>