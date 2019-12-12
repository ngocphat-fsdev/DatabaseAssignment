<?php
    $serverName="DESKTOP-G1UR9M1\MSSQLDB";

    $connectionInfo = array("Database"=>"ASSIGNMENT2_DS");
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    
    // if ($conn){
    //     echo "Connection ok.<br />";
    // }
    // else{
    //     echo "Connection not ok.<br />";
    // }
    

    /*$sql = "SELECT * FROM ACCOUNT"; 
    // them vao database table ACCOUNT: id=1. username=admin, password=admin
    
    $stmt = sqlsrv_query($conn, $sql); // False (deny permission)???
    if ($stmt == FALSE){
        die(print_r(sqlsrv_errors(), true));
    }

    $row = sqlsrv_fetch_array($stmt);
    echo $row['ID'];
    echo $row['USERNAME'];
    echo $row['PASSWORD'];
    //echo $row['USERNAME'];
    */
?>