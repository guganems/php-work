<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 04.02.2019
 * Time: 21:49
 */
require ("contactswebsitehtmlsections.php");
require ("websiteheader.php");
require ("websitetoolbar.php");
require ('datatablesection.php');
require ("websitefooter.php");

echo GetHtmlHeader();
echo GetWebSiteHeader();
echo GetWebSiteToolbar();
echo GetDataTableSection();
echo GetWebSiteFooter();
echo GetHtmlFooter();