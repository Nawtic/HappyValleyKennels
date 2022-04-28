<?php
session_start();

print("Session Information<br>");

foreach ($_SESSION as $value){
    print($value);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["First Name"] = $_POST["Name"];
    $_SESSION["Role"] = $_POST["Role"];
    $_SESSION["UserID"] = 444;

    header("location: /HappyValleyKennels/Home");
}
?>

<!DOCTYPE html>

<html>

<head>
    <title>Site Broke?</title>
</head>

<body>
    <form action="debug.php" method="POST">
        <p>Set $_SESSION["First Name"]</p>
        <input type="text" name="Name">
        <p>Set $_SESSION["Role"]</p>
        <p>Expected values include: "Customer", "Employee", "Human Resources"</p>
        <input type="text" name="Role">

        <input type="submit" value="Troubleshoot">
    </form>
</body>

</html>