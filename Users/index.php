<?php
$page_creator = "Stephen Erichsen";
include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php");

if ((!isset($_SESSION["Role"])) AND ($_SESSION["Role"] != "ITAdmin")) {
    print_r($_SESSION["Role"]);
}
?>

<html>
    <head>
        <script src="user_manage.js"></script>
        <link rel="stylesheet" type="text/css" href="users.css">
    </head>
    <body>
        <div id="Page_Content">
            <h1>Employee User Management System</h1>
            <div id="options_menu">
                <h2>Select An Option</h2>
                <button onclick="addUser()">Add User</button>
                <button>Edit User</button>
            </div>
            <div id="add_menu" class="hide">
                <h1>Add New Employee</h1>
                <form>
                    <label for="first_name">First Name</label><br>
                    <input type="text" id="first_name"><br>

                    <label for="last_name">Last Name</label><br>
                    <input type="text" id="last_name"><br>
                    
                    <label for="role">Role</label><br>

                    <input type="radio" id="employee" name="role">
                    <label for="employee">Employee</label><br>

                    <input type="radio" id="veterinarian" name="role">
                    <label for="veterinarian">Veterinarian</label><br>

                    <input type="radio" id="administrator" name="role">
                    <label for="administrator">Administrator</label><br>
                </form>
            </div>
        </div>
    </body>
</html>

<?php
include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php");
?>