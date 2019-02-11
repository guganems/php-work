<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 11.02.2019
 * Time: 23:15
 */
include 'connect.php';

foreach ($db->query("SELECT * FROM names") as $row){
    echo htmlentities($row['firstname']) . " " . htmlentities($row['lastname']) . " " . htmlentities($row['postcode']) . '<br />';
}