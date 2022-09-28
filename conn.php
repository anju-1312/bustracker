<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:divya18.database.windows.net,1433; Database = bustracker", "divya", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "divya", "pwd" => "{your_password_here}", "Database" => "bustracker", "LoginTimeout" => 30, "Encrypt" => 0, "TrustServerCertificate" =>True);
$serverName = "tcp:divya18.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
