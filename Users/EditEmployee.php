<?php
$page_creator = "Stephen Erichsen";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";

$id = $_POST["employee_id"];
$_SESSION["edit_id"] = $id;

if($id == $_SESSION["UserID"]) {
    echo("<div id=\"Page_Content\"><h1>Cannot Edit Own Employee Details<h1></div>");
    exit();
}

$username = "HR";
$password = "HR";
$dsn = 'mysql:host=localhost;dbname=happy_kennel';

$db = new PDO($dsn, $username, $password);

$statement_text = "SELECT role, first_name, last_name FROM employees WHERE employee_id = ?";

$statement = $db->prepare($statement_text);
$statement->execute([$id]);

$result = $statement->fetch();

if($result == false) {
    echo("<div id=\"Page_Content\"><h1>Employee Details Could Not Be Accessed<h1><h2>Ensure You Have Entered The Employee ID Correctly, And Try Again<h2></div>");
    exit();
} else {
    $role = $result["role"];
}
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="edit_users.css">
    <script src="user_edit.js"></script>
</head>

<body>
    <div class="hide">
        <p id="oldFirst"><?php echo ($result["first_name"]); ?></p>
        <p id="oldLast"><?php echo ($result["last_name"]); ?></p>
        <p id="oldRole"><?php echo ($result["role"]); ?></p>
    </div>
    <div id="Page_Content">
        <h1>Employee #<?php echo (str_pad($id, 4, "0", STR_PAD_LEFT) . " / " . $role) ?></h1>
        <form id="detail_form" name="edit_form" action="CommitChanges.php" method="POST">
            <div class="horizontal">
                <div class="vertical">
                    <h2>First Name</h2>
                    <input type="text" name="first" class="names" value="<?php echo ($result["first_name"]); ?>">
                </div>
                <div class="vertical">
                    <h2>Last Name</h2>
                    <input type="text" name="last" class="names" value="<?php echo ($result["last_name"]); ?>">
                </div>
            </div>
            <div class="vertical center" id="role_radio">
                <h2>Role</h2>

                <div class="vertical">
                    <div>
                        <input type="radio" id="employee" name="role" value="Employee" required autocomplete="off" <?php if($result["role"]=="Employee"){ echo("checked=\"checked\""); }?>>
                        <label for="employee">Employee</label>
                    </div>

                    <div>
                    <input type="radio" id="vet" name="role" value="Veterinarian" required autocomplete="off" <?php if($result["role"]=="Veterinarian"){ echo("checked=\"checked\""); }?>>
                    <label for="vet">Veterinarian</label><br>
                    </div>

                    <div>
                        <input type="radio" id="hr" name="role" value="Human Resources" required autocomplete="off" <?php if($result["role"]=="Human Resources"){ echo("checked=\"checked\""); }?>>
                        <label for="hr">Human Resources</label><br>
                    </div>
                    <button id="confirmation_button" type="button" onclick="confirmation()">Commit Changes</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php";
?>