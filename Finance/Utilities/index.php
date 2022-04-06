<!-- Page Credit: Ashton Paiz -->

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php";

    if(!isset($_SESSION["Role"]) AND $_SESSION["Role"] != "Employee"){
        header('Location: /HappyValleyKennels/Assets/Error/Access Denied');
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Happy Valley Kennels</title>
        <link rel="stylesheet" type="text/css" href="bill_and_inventory.css">
    </head>
    <body>
        <div id="Page_Content">
            <p id="table_description">Listed below is the utilities paid in the last month and the current year</p>
            <table>
                <tr>
                    <th>Utility</th>
                    <th>Last Month</th>
                    <th>Current Year</th>
                </tr>  
                <tr>
                    <td>Electric</td>
                    <td>$250</td>
                    <td>$1900</td>  
                </tr>
                <tr>
                    <td>Water</td>
                    <td>$175</td>
                    <td>$1330</td>  
                </tr>
            </table>
        </div>

    </body>
</html>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php";
?>