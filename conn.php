<?php 
<system.net>
<defaultProxy>
  <proxy  proxyaddress="divya18.database.windows.net" bypassonlocal="True"/>

$servername='divya18.database.windows.net';
$username='divya';
$password='Devesh-2002';
$db='bustracker';


$conn=new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
	# code...
}
else{
    echo "connected successfully";
    
}
</defaultProxy>
</system.net>


?>
