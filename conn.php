<?php
    $serverName = "divya18.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "bustracker", // update me
        "Uid" => "divya", // update me
        "PWD" => "Devesh-2002" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions,Trusted_Connection=False;Encrypt=True;);
    $tsql= "SELECT TOP (1000) * FROM [dbo].[bus]";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['Name'] . " " . $row['Bno'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
?>
