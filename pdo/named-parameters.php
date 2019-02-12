<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 11.02.2019
 * Time: 23:15
 */
include 'connect.php';

$stmt = $db->prepare("SELECT * FROM names WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Andy', PDO::PARAM_STR);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname . ' ' . $lastname . ' ' . $postcode . '<br />';
}
