<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "projtest"; //name of DataBase 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT * FROM records";
$result = $conn->query($sql);
?>

<html>
<head>
<title>people data</title>
</head>
<body>
<table width="600" border="1" color="#8BC34A;" cellpadding="1" cellspacing="1">
 <tr>
 <th style="color:#8BC34A;">DateOfReading</th>
 <th style="color:#8BC34A;">Temperature</th>
 <th style="color:#8BC34A;">HeartBeats</th>
 <th style="color:#8BC34A;">Pressure</th>
 <tr>
 
 <?php
 while($row =$result->fetch_assoc()){
	echo "<tr>";
	echo "<td>".$row["DateOfReading"]."</td>";
	echo "<td>".$row["Temp"]."</td>";
	echo "<td>".$row["HeartBeats"]."</td>";
	echo "<td>".$row["Pres"]."</td>";
    echo "</tr>";
 }//end while  
 ?>
</table>
</body>
</html>