<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 12.02.2019
 * Time: 07:11
 */
include 'connect.php';

$stmt = $db->prepare("UPDATE names SET postcode = :postcode WHERE firstname = :firstname");

$stmt->bindValue(':firstname','Jenny');
$stmt->bindValue(':postcode','UI34 DSD2');
$stmt->execute();