<?php
/**
 * This file establishes DB connection
 * @author Isa Ozsoy
 * @license M.I.T
 */
require_once('db_cred.php');

/*
 $con = pg_connect("$host $port $dbname $user $password");

$query = "";

$result = pg_query($con, $query) or die("Cannot execute query: $query\n");
echo $json_response = "[";
while ($row = pg_fetch_object($result)) {
    echo $json_response = json_encode($row) . ",";
}
echo $json_response = ']';
*/

    $con_string = "pgsql:$host;$port";

try {
    $conn = new PDO($con_string,"$user","$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch (PDOException $e){
    echo $e->getMessage();
}