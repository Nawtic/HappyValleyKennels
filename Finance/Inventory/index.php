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
    </head>
    <body>
        <div id="Page_Content">
            <p id="table_description">Listed below is the inventory of consumables.</p>
            <table>
                <tr>
                    <th>Consumable</th>
                    <th>Amount In Stock</th>
                    <th>Amount ordered</th>
                    <th>Reason</th>
                </tr>  
                <tr>
                    <td>Dog food</td>
                    <td>50 bags</td>
                    <td>20</td>  
                    <td>Food</td>  
                </tr>
                <tr>
                    <td>Insulin</td>
                    <td>10 containers</td>
                    <td>40</td>  
                    <td>Diabetes</td>  
                </tr>
                <tr>
                    <td>Trilostane</td>
                    <td>8 packs</td>
                    <td>20</td>  
                    <td>Cushing's disease</td>  
                </tr>
            </table>
        </div>

    </body>
</html>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php";
?>