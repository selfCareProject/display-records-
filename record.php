<?php
/*
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "projtest"; //name of DataBase 
*/
$servername = "mysql.2freehosting.com";
$username = "u787994640_self";
$password = "selfcare";
$dbname = "u787994640_care";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$email ="s12@yahoo.com";
$sql = "SELECT * FROM patient_records WHERE Patient_email ='$email'  ORDER BY Date DESC "; //records
$result = $conn->query($sql);
?>

<html>
<head>
<title>Your Records</title>
</head>
<body>
<table width="600" border="1" cellpadding="1" cellspacing="1" >
 <tr>
 <th style="color:#8BC34A;">DateOfReading</th> 
 <th style="color:#8BC34A;">Temperature</th> 
 <th style="color:#8BC34A;">HeartBeats</th>
 <th style="color:#8BC34A;">Pressure</th>
 <tr>
 
 <?php
 while($row =$result->fetch_assoc()){
	echo "<tr>";
    echo "<td>".$row["Date"]."</td>"; // DateOfReading
	echo "<td>".$row["Temperture"]."</td>";    //Temp
	echo "<td>".$row["Heart"]."</td>"; //HeartBeats
	echo "<td>".$row["Pressure"]."</td>"; //Pres
    echo "</tr>";
 }//end while  
 ?>
</table>
</body>
</html>