<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 12:37
 */
$samplevar = 10;
function sumvars(){
    $a = 5;
    $b = 3;
    $samplevar = $a + $b;
    echo "\$samplevar inside this function is $samplevar. <br />";
}
sumvars();
echo "\$samplevar outside the previous function is $samplevar. <br />";

function phpfunction($parameter1, $parameter2){
    return $parameter1 * $parameter2;
}
$funcval = phpfunction(6, 3);
echo "Return value from phpfunction() is $funcval. <br />";

$globalvar = 55;

function dividevalue(){
    GLOBAL $globalvar;
    $globalvar /= 11;
    echo "Division result $globalvar. <br />";
}

dividevalue();

function countingsheeps(){
    STATIC $sheepnumber = 0;
    $sheepnumber++;
    echo "Sheep number $sheepnumber. <br />";
}

countingsheeps();
countingsheeps();
countingsheeps();
countingsheeps();
countingsheeps();