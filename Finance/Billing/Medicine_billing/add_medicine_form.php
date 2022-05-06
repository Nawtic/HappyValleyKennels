<?php
$page_creator = "Ashton Paiz";
include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";
include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php";

require('database.php');
$query = 'SELECT *
          FROM medicine_billing
          ORDER BY medicine_id';
$statement = $db->prepare($query);
$statement->execute();
$medicines = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Happy Valley Kennels</title>
    <link rel="stylesheet" type="text/css" href="add_form.css">
</head>

<!-- the body section -->
<body>
    <div id="Page_Content">

        <h1>Add Item to Medicine Bill</h1>
        <form action="add_medicine.php" method="post"
              id="add_medicine_form">

            <label>Type:</label>
            <input type="text" name="type"><br>

            <label>Number of Container:</label>
            <input type="text" name="number"><br>

            <label>Price per Container:</label>
            <input type="text" name="price"><br>
            
            <label>Total:</label>
            <input type="text" name="total"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add medicine"><br>
        </form>
        <p><a href="index.php">View Medicine Bill</a></p>
</body>
</html>