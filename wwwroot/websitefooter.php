<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 04.02.2019
 * Time: 22:05
 */
function GetWebSiteFooter(){
    $result = '<footer style="clear: both; position: fixed; left: 0; bottom: 0; height: 50px; margin-top: -50px; width: 100%; background-color: #8D8D8D; color: white;">';
    $result .= '<div style="display: inline-block; width:80%; text-align: left;"><p style="margin: 12px 0px 0px 0px;">Copyright (C)2019 Aravin</p></div>'; $result .= "</footer>";

    return $result;
}