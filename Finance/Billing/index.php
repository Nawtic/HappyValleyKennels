<!-- Page Credit: Ashton Paiz -->

<?php
    $page_creator = "Ashton Paiz";
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
        <link rel="stylesheet" type="text/css" href="skeleton.css">
    </head>
    <body>

        <!-- Content of this div should be unique to each page -->
        <div id="Page_Content">
            <p id="foodbill_table_description">Listed below is a table of the dog food bought in the last month.</p>
            <table>
                <tr>
                    <th>Company</th>
                    <th>Number of Bags</th>
                    <th>Price per Bag</th>
                    <th>Total Cost</th>
                    <th>Type</th>
                    <th>Specialty</th>
                    <th>Reliability(1-5)</th>
                </tr>  
                <tr>
                    <td>ABC</td>
                    <td>20</td>
                    <td>$25</td>  
                    <td>$500</td>
                    <td>Dry</td>
                    <td>None</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>DEF</td>
                    <td>25</td>
                    <td>$22</td>  
                    <td>$550</td>
                    <td>Dry</td>
                    <td>None</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>GHI</td>
                    <td>18</td>
                    <td>$32</td>  
                    <td>$576</td>
                    <td>Dry</td>
                    <td>Vitamin</td>
                    <td>3</td>
                </tr>
            </table>
            
            <p id="medicinebill_table_description">Listed below is a table of the medicine bought in the last month.</p>
            <table>
                <tr>
                    <th>Type</th>
                    <th>Number of</th>
                    <th>Price per</th>
                    <th>Total Cost</th>
                </tr>  
                <tr>
                    <td>Insulin</td>
                    <td>10 containers</td>
                    <td>$100</td>  
                    <td>$1000</td>
                </tr>
                <tr>
                    <td>Trilostane</td>
                    <td>8 containers</td>
                    <td>$75</td>  
                    <td>$600</td>
                </tr>
            </table>
        </div>

    </body>
</html>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php";
?>