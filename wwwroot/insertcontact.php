<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 06.02.2019
 * Time: 14:00
 */
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "contactinfo";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($mysqli->connect_errno){
    echo "We're sorry. The website can not connect to the database <br />";
    echo "Error: MySQL connection failed: <br />";
    echo "Errno: " . $mysqli->connect_errno . "<br />";
    echo "Error: " . $mysqli->connect_error . "<br />";

    exit;
}

$sql = "INSERT INTO contacts (name, email, PHONENUMBER, SUBJECT, MESSAGE) VALUES  ('$name', '$email', '$phone', '$subject', '$message')";

if ($mysqli->query($sql) === TRUE){
    echo "OK";
}
else{
    echo "Error: " . $sql . "<br />" . $mysqli->error;
}

$mysqli->close();
