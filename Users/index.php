<?php
$page_creator = "Stephen Erichsen";
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");

if ((!isset($_SESSION["Role"])) and ($_SESSION["Role"] != "Human Resources")) {
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
            <button class="blue_button" onclick="addUser()">Add User</button>
            <button class="blue_button">Edit User</button>
        </div>
        <div id="add_menu" class="hide">
            <div class="back_button_container">
                <button onclick="mainMenu()" class="blue_button">Back</button>
            </div>
            <h1>Add New Employee</h1>
            <form action="AddEmployee.php" method="POST" onsubmit="return validate()" name="addEmp">
                <div>
                    <p class="error_text hide" id="empty_error">Empty or Invalid Fields, Check Input
                    <p>
                </div>
                <div id="form_content">
                    <div class="input_container">
                        <label for="first_name">First Name</label><br>
                        <input type="text" id="first_name" name="first_name" onfocusout="validate('first_name')" required><br>
                    </div>

                    <div class="input_container">
                        <label for="last_name">Last Name</label><br>
                        <input type="text" id="last_name" name="last_name" onfocusout="validate('last_name')" required><br>
                    </div>

                    <div class="input_container">
                        <label for="role">Role</label><br>

                        <input type="radio" id="employee" name="role" value="Employee" required>
                        <label for="employee">Employee</label><br>


                        <input type="radio" id="vet" name="role" value="Veterinarian" required>
                        <label for="vet">Veterinarian</label><br>

                        <input type="radio" id="hr" name="role" value="Human Resources" required>
                        <label for="hr">Human Resources</label><br>
                    </div>

                    <input type="submit" id="submit_button" class="blue_button" value="Add Employee">
                </div>
        </div>
        </form>
    </div>
    </div>
</body>

</html>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php");
?>