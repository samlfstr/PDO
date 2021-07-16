<?php
require_once('db_con.php');
/**
 * This file contains functions to manipulate DB queries
 * @author Isa Ozsoy
 * @license M.I.T
 */

global $conn;
try {
    $results = $conn->query('select * from employees');
    $arr = $results->fetchAll(PDO::FETCH_OBJ);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo json_encode($arr);
