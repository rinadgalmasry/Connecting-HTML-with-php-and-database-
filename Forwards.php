<?php
$sql = "";
$sql2 = "";

//Recive parametes from control
$mydistance = $_REQUEST['mydistanceF'];
echo "The robot is moving Forwards a distance of : ".$mydistance;
echo "<br>";

// connect to database
$conn = mysqli_connect('localhost', 'rinad', '1234', 'robot control panel');

// check connection
if(!$conn){
	echo 'Connection error:' . mysqli_connect_error();
}

// insert record Forwards
$sql = "INSERT INTO `robot moves` (moves,distance) Values ('Forwards',".$mydistance.")";
//Print_r($sql);

mysqli_query($conn, $sql);


//write query for all moves
$sql2 = 'SELECT * FROM `robot moves`';
//Print_r($sql);
//echo "<br>";

// make query and get result
$Myresult = mysqli_query($conn, $sql2);

// fetch the resulting rows as an array
$MovesArry = mysqli_fetch_all($Myresult, MYSQLI_ASSOC);

//print_r($moves);
echo "the total Number of robot Moves are: ".Count($MovesArry);
echo "<br>";

echo "<br>";
echo "The robot moves in sequance are bellow:";
echo "<br>";
echo "____________________________________________";
echo "<br>";
echo "<br>";


for ($x=0; $x<Count($MovesArry); $x++) {
	Print_r($MovesArry[$x]);
	echo "<br>";
	}
	

?>
<html>
<a href="http://localhost/my/Control_original.html">Back</a>
</html>

