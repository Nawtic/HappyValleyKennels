<?php
$page_creator = "Ashton Paiz";
include($_SERVER["DOCUMENT_ROOT"]."/HappyValleyKennels/assets/Header/Header.php");
include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php");

require('database.php');
$query = 'SELECT *
          FROM food_billing
          ORDER BY food_id';
$statement = $db->prepare($query);
$statement->execute();
$foods = $statement->fetchAll();
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

        <h1>Add Item to Food Billing</h1>
        <form action="add_food.php" method="post"
              id="add_product_form">
            
            <label>Company:</label>
            <input type="text" name="company"><br>

            <label>Number of Bags:</label>
            <input type="text" name="number"><br>

            <label>Price per bag:</label>
            <input type="text" name="price"><br>
            
            <label>Total:</label>
            <input type="text" name="total"><br>
            
            <label>Type:</label>
            <input type="text" name="type"><br>
            
            <label>Specialty:</label>
            <input type="text" name="specialty"><br>
            
            <label>Reliability:</label>
            <input type="text" name="reliability"><br>
            

            <label>&nbsp;</label>
            <input type="submit" value="Add food"><br>
        </form>
        <p><a href="index.php">View Food Billing</a></p>
</body>
</html>
