<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 12:49
 */
define("WEBPAGEWIDTH", 100);

echo WEBPAGEWIDTH;
echo constant("WEBPAGEWIDTH");

$salutation = "Good morning";
echo $salutation . ", Today is " . date("l F jS \of Y") . "<br />";

$somevariable = "Hello";
$literalstring = "The $somevariable will not print its contents";

print ($literalstring);
print ("<br />");

$literalstring = "$somevariable will print its contents";
echo "$literalstring";

$intnumbers = array(1, 2, 3, 4, 5);

foreach ($intnumbers as $value){
    echo "Array member value is $value <br />";
}

$letternumbers[0] = "one";
$letternumbers[1] = "two";
$letternumbers[2] = "three";
$letternumbers[3] = "four";
$letternumbers[4] = "five";

foreach ($intnumbers as $value){
    echo "Array member value is $value <br />";
}

$intnumbers = array("one" => 1, "two" => 2, "three" => 3, "four" => 4, "five" => 5);

foreach ($intnumbers as $k => $value) {
    echo "$k => $value <br />";
}

date_default_timezone_set("Etc/GMT+4");
$hour = date('H');
$dow = date('D');

if ($hour >= 0 && $hour < 12){
    $greeting = "Good Morning!";
}
elseif ($hour > 12 && $hour < 19){
    $greeting = "Good Afternoon";
}
else{
    $greeting = "Good Evening";
}

switch ($dow){
    case "Mon":
        echo $greeting . ", today is Monday";
        break;
    case "Tue":
        echo $greeting . ", today is Tuesday";
        break;
    case "Wed":
        echo $greeting . ", today is Wednesday";
        break;
    case "Thu":
        echo $greeting . ", today is Thursday";
        break;
    case "Fri":
        echo $greeting . ", today is Friday";
        break;
    case "Sat":
        echo $greeting . ", today is Saturday";
        break;
    case "Sun":
        echo $greeting . ", today is Sunday";
        break;
    default:
        echo $greeting . " What day is this?";
}

for ($iteration = 0; $iteration <= 10; $iteration++){
    echo "$iteration";
}

$sheepnumber = 0;
while ($sheepnumber < 11){
    echo "Sheep Number $sheepnumber";
    $sheepnumber++;
}

$sheepnumber = 1;
do{
    echo "Sheep Number $sheepnumber";
    $sheepnumber++;
}while($sheepnumber < 11);
$totalsheeps = $sheepnumber -1;
echo "We count only $sheepnumber sheeps";

$sheepsarray = array(1, 2, 3, 4, 5, 6, 7, 8);
foreach ($sheepsarray as $value) {
    echo "Sheep Number $value <br />";
}

$subtotal = 3.5;
while (true){
    $taxrate = rand(0, 10);
    if ($taxrate == 10) break;

    if ($taxrate == 0) continue;
    $taxvalue = $subtotal * ($taxrate/100);
    echo "Tax to be payed $taxvalue <br />";
}

function showmessage($message){
    echo "$message <br />";
}

showmessage('This message was deployed from within a function');

function greetingmessage($showdayofweek = false){
    date_default_timezone_set("Etc/GMT+4");
    $hour = date('H');
    $dow = date('N')-1;
    $namesofdays = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

    if ($hour >= 0 && $hour < 12){
        $result = "Good morning";
    }
    elseif ($hour >= 12 && $hour < 19){
        $result = "Good Afternoon";
    }
    else{
        $result = "Good Evening";
    }

    if ($showdayofweek) $result = $result . ", today is $namesofdays[$dow]";
    return $result;
}

echo greetingmessage(true);
echo greetingmessage();

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

$functionname = getgreetingfunction();
echo $functionname();
echo $functionname(true);




