<?php 
<system.net>
<defaultProxy>
  <proxy  proxyaddress="http://divya18.database.windows.net" bypassonlocal="True"/>
</defaultProxy>
</system.net>

$servername='divya18.database.windows.net';
$username='Divya';
$password='Devesh-2002';
$db='bustracker';


$conn=new mysqli($servername,$username,$password,$db);
if ($conn->connect_error) {
	die("connection failed".$conn->connect_error);
	# code...
}else{
    echo "connected successfully";
    
}

?>
