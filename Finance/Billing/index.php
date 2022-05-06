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
            <a href="Food_Billing">Food Billing</a>
            <a href="Medicine_Billing">Medicine Billing</a>
        </div>

    </body>
</html>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php";
?>