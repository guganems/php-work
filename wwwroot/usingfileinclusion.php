<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 15:25
 */
require ("commonfunctions.php");
$functionname = getgreetingfunction();

echo $functionname();
echo $functionname(true);