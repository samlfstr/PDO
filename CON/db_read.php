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
    $arr = $results->fetchAll();
    $tbl_names = ['Id', 'Name', 'In Office'];

    foreach ($arr as $item) {
        $rows[] = $item['id'] . $item['name'] . ($item['in_office'] ? 1 : 0) . "<br>";
    }
    for ($i = 0; $i < count($rows); $i++) {
        echo $rows[$i];
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
