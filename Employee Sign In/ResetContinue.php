<?php
$page_creator = "Stephen Ericshen";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = "logincheck";
    $password = "loginmanage";
    $dsn = 'mysql:host=localhost;dbname=happy_kennel';

    $db = new PDO($dsn, $username, $password);

    $statement_text = "UPDATE employees SET password = ? WHERE employee_id = " . $_SESSION["UserID"];

    $statement = $db->prepare($statement_text);
    $statement->execute([password_hash($_POST["password"], PASSWORD_DEFAULT)]);

    $statement_text = "UPDATE employees SET pending_reset = False WHERE employee_id = " . $_SESSION["UserID"];
    $statement = $db->prepare($statement_text);
    $statement->execute();

    session_destroy();
}
?>

<!DOCTYPE html>

<html>
    <body>
        <div id="Page_Content">
            <h1>Password Change Successful</h1>
            <p>Please <a href="../Employee Sign In">Sign In</a> Again</p>
        </div>
    </body>
</html>

<?php
    include "../assets/Footer/Footer.php";
?>