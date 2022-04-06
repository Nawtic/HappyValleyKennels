<?php
    session_start();

    if(!isset($_SESSION["Role"]) AND $_SESSION["Role"] != "Employee"){
        header('Location: /HappyValleyKennels/Assets/Error/Access Denied');
    }
    else {
        header('Location: /HappyValleyKennels/Reports/reports.php');
    }
?>