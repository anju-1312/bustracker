<?php
include "conn.php";
$Bno=$_POST['Busno'];
$i="not";

$query="SELECT Source,Destination FROM [dbo].[BusCheck] where Busno='$Bno'";
$exe=mysqli_query($conn,$query);
//print_r($exe);
 $tsql= "SELECT TOP (1000) * FROM [dbo].[BusCheck]";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['Source'] . " " . $row['Bno'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
if ($exe->num_rows>0) {
	# code...
	$products = array();
while($row=$exe->fetch_assoc()){
	 $row["Source"];
	 $row["Destination"];


	
 array_push($products, $row);
}
echo json_encode($products);
}else{
	echo $i;
}
?>
