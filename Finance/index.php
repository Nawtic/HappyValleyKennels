<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php";

    if(!isset($_SESSION["Role"]) AND $_SESSION["Role"] != "Employee"){
        header('Location: /HappyValleyKennels/Assets/Error/Access Denied');
    }
?>

<html>
    <body>
        <section></section>
    </body>
</html>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php";
?>