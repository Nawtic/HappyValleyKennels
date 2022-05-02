<?php
$page_creator = "Stephen Erichsen";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";

$id = $_SESSION["edit_id"];
unset($_SESSION["edit_id"]);

$username = "HR";
$password = "HR";
$dsn = 'mysql:host=localhost;dbname=happy_kennel';

$db = new PDO($dsn, $username, $password);
$db->beginTransaction();

$statement_text = "UPDATE employees SET first_name = ?, last_name = ?, role = ? WHERE employee_id = ?";

$statement = $db->prepare($statement_text);
$statement->execute([$_POST["first"],$_POST["last"],$_POST["role"],$id]);

echo("<div id=\"Page_Content\">");

if($db->commit()){
    echo("<h1>Successfully Made Changes To Employee List</h1>");
} else {
    echo("<h1>Error In Adding Employee To List, Try Again</h1>");
}

echo("</div>");

include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php";
?>