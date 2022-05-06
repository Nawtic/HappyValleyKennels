<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";

require('database.php');
$query = 'SELECT *
          FROM inventory
          ORDER BY consumable_id';
$statement = $db->prepare($query);
$statement->execute();
$inventory = $statement->fetchAll();
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

        <h1>Add Item to Inventory</h1>
        <form action="add_consumable.php" method="post"
              id="add_product_form">

            <label>Name:</label>
            <input type="text" name="name"><br>

            <label>Amount In Stock:</label>
            <input type="text" name="stock"><br>

            <label>Amount Ordered:</label>
            <input type="text" name="ordered"><br>
            
            <label>Reason:</label>
            <input type="text" name="reason"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Consumable"><br>
        </form>
        <p><a href="index.php">View Inventory</a></p>
</body>
</html>