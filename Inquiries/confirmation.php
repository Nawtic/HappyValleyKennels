<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "localhost";
$username = "root";
$password = "";
$conn = new 
PDO("mysql:host=$servername;
dbname=faq", $username, $password);

$sql = "INSERT INTO resp(question, response) 
	VALUES('".$_POST["question"]."', '".$_POST["response"]."')";
$conn->exec($sql);
header("location: /HappyValleyKennels/Inquiries");
}
?>