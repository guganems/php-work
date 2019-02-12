<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 12.02.2019
 * Time: 07:11
 */
include 'connect.php';

$stmt = $db->prepare("DELETE FROM names WHERE firstname = :firstname");

$stmt->bindValue(':firstname','Jenny');
$stmt->execute();