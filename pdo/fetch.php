<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 11.02.2019
 * Time: 23:15
 */
include 'connect.php';

$stmt = $db->query("SELECT * FROM names");

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
//    echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . '<br />';
    echo "<pre>" . var_dump($row). "</pre>";
}