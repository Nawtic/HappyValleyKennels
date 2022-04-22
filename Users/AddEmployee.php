<?php
    $page_creator = "Stephen Erichsen";
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";

    $fname = $_POST["first_name"];
    $lname = $_POST["last_name"];
    $role = $_POST["role"];
    $tmp_password = uniqid();

    $username = "HR";
    $password = "HR";
    $dsn = 'mysql:host=localhost;dbname=happy_kennel';

    $db = new PDO($dsn, $username, $password);

    $statement_text = "INSERT INTO employees(first_name, last_name, role, password) VALUES(?, ?, ?, ?)";

    $statement = $db->prepare($statement_text);
    $statement->execute([$fname, $lname, $role, password_hash($tmp_password, PASSWORD_DEFAULT)]);

    $id = $db->lastInsertId();
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="print.css">
    </head>
    <body>
        <div id="Page_Content">
            <h1 id="message">User Created</h1>
            <h1><?php echo($fname . " " . $lname)?></h1>
            <h2>Employee #<?php echo(str_pad($id, 4, "0", STR_PAD_LEFT) . " / " . $role)?></h2>
            <h3>Your Temporary Password Is: <?php echo($tmp_password)?></h3>
        </div>
    </body>
</html>

<?php
    include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Footer/Footer.php";
?>