<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 04.02.2019
 * Time: 21:59
 */
function GetWebSiteToolbar(){
    $result = '<section style="margin-top: 5px; height: 60px;"><div class="container">'; $result .= '<button type="button" style="height: 56px;" onclick="div_show(); return false;">Add Contact</button>'; $result .= '</div></section>';
    return $result;
}