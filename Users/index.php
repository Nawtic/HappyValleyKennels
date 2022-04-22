<?php
$page_creator = "Stephen Erichsen";
include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php");

if ((!isset($_SESSION["Role"])) AND ($_SESSION["Role"] != "ITAdmin")) {
    print_r($_SESSION["Role"]);
}
?>

<html>
    <head>
        <script src="user_manage.js"></script>\
        <link rel="stylesheet" type="text/css" href="users.css">
    </head>
    <body>
        <div id="Page_Content">
            <h1>Employee User Management System</h1>
            <div id="options_menu">
                <p>Select An Option</p>
                <button onclick="addUser()">Add User</button>
            </div>
            <div id="add_menu" class="hide">
                <form>
                    <input type="text">
                </form>
            </div>
        </div>
    </body>
</html>

<?php
include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php");
?>