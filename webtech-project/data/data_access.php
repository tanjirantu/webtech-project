<?php

$host="127.0.0.1";
$user="root";
$pass="";
$dbname="webtech_project";
$port=3306;

function executeSql($sql)
{
    global $host, $user, $pass, $dbname, $port;

    $conn = mysqli_connect($host, $user, $pass, $dbname, $port);

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);

    return $result;
}
