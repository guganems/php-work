<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 04.02.2019
 * Time: 21:56
 */
function GetWebSiteHeader(){
    $result = '<header style="width:100%; height:50px; background-color: #8D8D8D; color: white;">'; $result .= '<div style="display: inline-block; width:90%; text-align: center;"><h1 style="margin: 0px 0px 0px 0px;">Personal Contact List Website</h1></div>'; $result .= '<div style="display: inline-block; width:10%;"><a href="#" onclick="window.close();return false;">X</a></div></header>';
    return $result;
}