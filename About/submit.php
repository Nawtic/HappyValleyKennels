<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new 
PDO("mysql:host=$servername;
dbname=faq", $username, $password);

$sql = "INSERT INTO inquiry(question, recency) 
	VALUES('".$_POST["Inquiry"]."', NOW())";
$conn->exec($sql);
header("location: /hvk_website/USER_FAQ/");

?>