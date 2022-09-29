<?php
header('Access-Control-Allow-Origin: *');
include "conn.php";
$Bno=$_POST['Bno'];
$Name=$_POST['Name'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$Destination=$_POST['Destination'];

echo($Bno)

$query="INSERT INTO [dbo].[bus] VALUES('$Bno','$Name','$Destination','$latitude','$longitude')";
$res=mysqli_query($conn,$query);

if ($res) {
	echo "true";
}else{
	echo "false";
}
  ?>
