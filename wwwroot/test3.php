<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 15:58
 */
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