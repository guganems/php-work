<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 11.02.2019
 * Time: 23:03
 */

try {
    $db = new PDO('mysql:hos=localhost;dbname=testdb;charset=utf8', 'root', '');
//    var_dump($db);
}
catch (Exception $e){
//    echo $e->getMessage();
    echo "An error has occurred";
}