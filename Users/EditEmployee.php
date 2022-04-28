<?php
$page_creator = "Stephen Erichsen";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";

$id = $_POST["employee_id"];

$username = "HR";
$password = "HR";
$dsn = 'mysql:host=localhost;dbname=happy_kennel';

$db = new PDO($dsn, $username, $password);

$statement_text = "SELECT role, first_name, last_name FROM employees WHERE employee_id = ?";

$statement = $db->prepare($statement_text);
$statement->execute([$id]);

$result = $statement->fetch();
?>

<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="edit_users.css">
</head>

<body>
    <div id="Page_Content">
        <h1>Employee #<?php echo (str_pad($id, 4, "0", STR_PAD_LEFT) . " / " . $result["role"]) ?></h1>
        <form id="detail_form">
            <div class="horizontal">
                <div class="vertical">
                    <h2>First Name</h2>
                    <input type="text" class="names" value="<?php echo ($result["first_name"]); ?>">
                </div>
                <div class="vertical">
                    <h2>Last Name</h2>
                    <input type="text" class="names" value="<?php echo ($result["last_name"]); ?>">
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
                </div>
            </div>
        </form>
    </div>
</body>

</html>

<?php
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php";
?>