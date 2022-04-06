<?php
require_once('database.php');
if (!isset($ID)) {
    $ID = filter_input(INPUT_GET, 'ID', 
            FILTER_VALIDATE_INT);
    if ($ID == NULL || $ID == FALSE) {
            $ID = 1;
    }
}
$queryReports = 'SELECT * FROM reports
                  ORDER BY ID';
$statement1 = $db->prepare($queryReports);
$statement1->bindValue('ID', $ID);
$statement1->execute();
$reports = $statement1->fetchAll();
$statement1->closeCursor();
$title='Reports';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>

<html>
    <head>
        <title>Happy Valley Kennels</title>
        <link rel="stylesheet" type="text/css" href="../reports.css">
        <link rel="stylesheet" type="text/css" href="reports.css">
    </head>
    <body>
        <div id="Page_Header">
            <a href="../Home">Happy Valley Kennels</a>
        </div>

        <ul id="Nav_Bar">
            <li><a class="active" href="../Home">Home</a></li>
            <li><a href="../About">About</a></li>
            <li><a href="../Reports/reports.html">Reports</a></li>
            <li><a href="../FAQ">FAQ</a></li>
            <li><a href="../Contact">Contact</a></li>
            <li id="Profile_Button"><a href="../Profile">Profile</a></li>
        </ul>

        <!-- Content of this div should be unique to each page -->
        <div id="Page_Content">
            <section>
      <table>
         <caption><h3>Reports</h3></caption>
        <thead>
            <tr>
                <th class="left">Dog Name(s)</th>
                <th class="left">Owner Name(s)</th>
                <th class="left">Food Type</th>
                <th class="left">Necessary Medical Info</th>
                <th class="left">Paid?</th>
                <th class="left">Date Start-End</th>
                <th class="right">Comments</th>
            </tr>
        </thead>   
        <tbody>
            <tr class="blue">  
                <td rowspan="1" class="middle"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td rowspan="1" class="middle"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
            </tr>
            <tr class="blue">
                <td rowspan="1" class="middle"></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td> 
            </tr>
        </tbody>
    </table>
</section>
    
        </div>

        <div id="Page_Footer">
            <hr>
            <div id="Footer_Content">
                <object type="image/svg+xml" data="../assets/HappyValleyLogo.svg" width="100" height="100"></object>
                <p>Happy Valley Kennels</p>
                <p><a href="../Contact">Contact</a></p>
            </div>
        </div>

    </body>
</html>