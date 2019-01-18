<?php
/**
 * Created by PhpStorm.
 * User: nemst
 * Date: 18.01.2019
 * Time: 12:56
 */

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=guganems.xls");

echo 'guga';

?>

<br />

<table style="width: 100%" border="1">
    <tr>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>Guga</td>
        <td>Nemsitsveridze</td>
        <td>20</td>
    </tr>
    <tr>
        <td>Mari</td>
        <td>Charkviani</td>
        <td>21</td>
    </tr>
</table>
