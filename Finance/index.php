<?php
$page_creator = "Ashton Paiz";
session_start();

if (!isset($_SESSION["UserID"])) {
    header('Location: /HappyValleyKennels/Assets/Error/Access Denied');
}

include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/Finance/financeHeader.php";
?>

<html>

<body>
    <section></section>
</body>

</html>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php";
?>