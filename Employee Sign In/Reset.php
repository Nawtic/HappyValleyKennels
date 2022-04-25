<?php
session_start();

if(!isset($_SESSION["UserID"])) {
    header('Location: /HappyValleyKennels/Assets/Error/Access Denied');
}

$page_creator = "Stephen Ericshen";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="Reset.css">
    <script src="Reset.js"></script>
</head>

<body>
    <div id="Page_Content">
        <form id="reset_form" action="ResetContinue.php" method="POST">
            <h1>Password Change</h1>
            <p>To maintain account security, please enter a new password for your account</p>
            <p id="error_text"></p>
            <input type="password" id="password" name="password" placeholder="Enter New Password" onfocusout="validate('password')" required>
            <input type="password" id="password_reenter" placeholder="Re-Enter New Password" onfocusout="validate('password_reenter')" required>
            <div id="show_password">
                <input type="checkbox" id="show_password_checkbox" name="show_password_checkbox" onclick="show_password()">
                <label id="show_password_label" for="show_password_checkbox">Show Password</label>
            </div>
            <input type="submit" value="Submit" id="submit_button">
        </form>
    </div>
</body>

</html>