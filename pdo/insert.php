<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 12.02.2019
 * Time: 07:11
 */
include 'connect.php';

$stmt = $db->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES (:firstname, :lastname, :postcode)");

$stmt->bindValue(':firstname','Jenny');
$stmt->bindValue(':lastname','Jodpers');
$stmt->bindValue(':postcode','JJ7 J3');
$stmt->execute();