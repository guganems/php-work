<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 15:58
 */
require ("commonfunctions.php");

$filename = "license.txt";
$file = fopen($filename, 'r');

if ($file == false){
    echo (" Open when opening file");
    exit();
}

$filesize = filesize($filename);
$filecontents = fread($file, $filesize);
fclose($file);

echo "<html lang='en-US'>\n";
echo "<head>\n<title>Reading a file using PHP</title>\n</head>\n";
echo "<body>\n<pre>$filecontents</pre></body>\n";
echo "</html>\n";

function createwebpage(){
    $greetingfunction = getgreetingfunction();
    $greeting = $greetingfunction(true);

    $webpagecontent = "<html lang='en-US'>\n<head>\n<title>Writing a file using PHP</title>\n</head>\n";
    $webpagecontent = $webpagecontent . "<body>\n<pre>$greeting</pre>\n<pre>THis web page was created writing a file with PHP</pre>\n</body>\n</html>\n";
    $filename = "webpage.txt";
    $file = fopen($filename, 'w');
    fwrite($file, $webpagecontent);
    fclose($file);
}

createwebpage();

$filename = "webpage.txt";
$file = fopen($filename, "r");

if ($file == false){
    echo ("Error When opening file");
    exit();
}

$filesize = filesize($filename);
$filecontents = fread($file, $filesize);
fclose($file);

echo "$filecontents";
















