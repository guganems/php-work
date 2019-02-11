<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 11.02.2019
 * Time: 23:15
 */
include 'connect.php';

$stmt = $db->query("SELECT * FROM names");

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br />';
}