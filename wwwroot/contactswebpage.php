<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 03.02.2019
 * Time: 19:21
 */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$database = "contactinfo";
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $database);

if ($mysqli->connect_errno){
    echo "We're sorry. The website can not connect to the database <br />";
    echo "Error: MySQL Connection failed: <br />";
    echo "Errno: " . $mysqli->connect_errno . "<br />";
    echo "Error: " . $mysqli->connect_error . "<br />";

    exit;
}

$sql = "SELECT contacts.* FROM contacts ORDER BY contacts.NAME";
$resultset = $mysqli->query($sql);

echo "<!DOCTYPE html>\n<html lang='en-US'>\n<head>\n<title>Displaying contacts list</title>";
echo "</head>\n";
echo "<body>\n";

if ($resultset->num_rows > 0){
    echo "<section>\n";
    echo "<div style=" . '"color:#FFFFFF; background-color:#5F5F5F; text-align: center;"' . ">\n";
    echo "<h3>OUR CONTACT LIST</h3>\n";
    echo "</div>\n";
    echo "<div>\n";
    echo "<table width=100%>\n";
    echo "<thead>\n";
    echo "<tr><th style=" . '"color:#FFFFFF; background-color:#5F5F5F; text-align: center;"' . ">ID</th>\n"; echo "<th style=" . '"color:#FFFFFF; background-color:#5F5F5F; text-align: center;"' . ">Contact Name</th>\n"; echo "<th style=" . '"color:#FFFFFF; background-color:#5F5F5F; text-align: center;"' . ">Contact Email</th>\n</tr>\n</thead>\n"; echo "<tbody>\n";
    while ($datarow = $resultset->fetch_assoc()){
        echo "<tr>\n<td>".$datarow["ID"]."</td><td>".$datarow["NAME"]."</td><td>".$datarow["EMAIL"]."</td>\n</tr>\n";
    }
    echo "</tbody>\n";
    echo "</table>\n</div>\n";
    echo "</section>\n";
}
else{
    echo "<section>\n<p>No contacts available</p>\n</section>";
}

echo "<footer>\n<div style=" . '"color:#FFFFFF; background-color:#5F5F5F; text-align: center;"' . ">\n<p>Copyright (C)2019 GUGA :D</p>\n</div>\n</footer>\n"; echo "</body>\n</html>\n";

$mysqli->close();























