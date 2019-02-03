<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 03.02.2019
 * Time: 14:54
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "contactinfo";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($mysqli->connect_errno){
    echo "We are sorry. The website can not connect to the database";
    echo "Error: MySQL connection failed: \n";
    echo "Error: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";

    exit;
}

echo "MySQL connection succeeded";
$mysqli->close();