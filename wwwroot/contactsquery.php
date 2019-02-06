<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 06.02.2019
 * Time: 11:53
 */
function contactsDataset(){
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $database =  "contactinfo";
    $mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

    if ($mysqli->connect_errno) {
        return null;
    }

    $sql = "SELECT contacts.* FROM contacts ORDER BY contacts.NAME";
    $resultset = $mysqli->query($sql);
    $mysqli->close();
    return $resultset;
}