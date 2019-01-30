<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 30.01.2019
 * Time: 12:40
 */
$apptitle = "Application Title";
function locals(){
    $apptitle = "Local application title";
    echo "\$apptitle value at global scope: " . $GLOBALS["apptitle"] . "<br />";
    echo "\$aptitle value at local scope: " . $apptitle . "<br />";
}

locals();

echo $_SERVER["PHP_SELF"] . "<br />";
echo $_SERVER["SERVER_NAME"] . "<br />";
echo $_SERVER["REMOTE_ADDR"] . "<br />";
echo $_SERVER["REMOTE_HOST"] . "<br />";