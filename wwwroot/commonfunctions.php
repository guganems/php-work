<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 15:24
 */
function getgreetingfunction(){
    date_default_timezone_set("Etc/GMT+4");
    $funcnames  = array("goodmorning", "goodmorning", "goodafternoon", "goodevening");
    $hour = date('H');
    return $funcnames[(int)$hour/6];
}

function dayofweeknames($daynumber){
    $namesofdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");
    return $namesofdays[$daynumber - 1];
}

function goodmorning($showdayofweek = false){
    $result = "Good Morning";
    if ($showdayofweek) $result = $result . ", today is " . dayofweeknames(date('N'));
    $result = $result . "<br />";
    return $result;
}

function goodafternoon($showdayofweek = false){
    $result = "Good Afternoon";
    if ($showdayofweek) $result = $result . ", today is " . dayofweeknames(date('N'));
    $result = $result . "<br />";
    return $result;
}

function goodevening($showdayofweek = false){
    $result = "Good Evening";
    if ($showdayofweek) $result = $result . ", today is " . dayofweeknames(date('N'));
    $result = $result . "<br />";
    return $result;
}