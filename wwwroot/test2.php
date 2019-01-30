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
if ($hour >= 0 && $hour < 12){
    echo "Good morning!";
}
elseif ($hour > 12 && $hour < 19){
    echo "Good Afternoon";
}
else{
    echo "Good Evening";
}







