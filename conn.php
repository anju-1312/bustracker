<?php 
<system.net>
    <defaultProxy enabled="false" >
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
    Log.d("connection is established")
}
     </defaultProxy>
</system.net>
?>
