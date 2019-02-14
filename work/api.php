<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 14.02.2019
 * Time: 12:21
 */
$content = file_get_contents("http://poemsapi.ga/public/api/poem/2");

$result = json_decode($content);

print_r($result[0]->content);
