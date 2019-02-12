<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 12.02.2019
 * Time: 07:35
 */
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'furniture';

$conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

if ($conn->connect_error){
    die("Connection Failed: " . $conn->connect_error);
}