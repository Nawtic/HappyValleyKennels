<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";
//include $_SERVER['DOCUMENT ROOT']."HappyValleyKennels/assets/Header/Header.php
//include $_SERVER['DOCUMENT ROOT']."HappyValleyKennels/assets/Finance/financeHeader.php

//if(!isset($_SESSION["ROLE"]) AND $_SESSION["ROLE"] != "Employee"){
// header('Location: /HappyValleyKennels/Assets/Error/Access Denied');

require_once('database.php');

// Get consumable ID
if (!isset($consumable_id)) {
    $consumable_id = filter_input(INPUT_GET, 'consumable_id', 
            FILTER_VALIDATE_INT);
    if ($consumable_id == NULL || $consumable_id == FALSE) {
        $consumable_id = 1;
    }
}

// Get name for selected consumable

// Get all consumables
$query = 'SELECT * FROM inventory
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
    <link rel="stylesheet" type="text/css" href="bill_and_inventory.css" />
</head>

<!-- the body section -->
<body>
    <div id="Page_Header">
            <a href="../Home">Happy Valley Kennels</a>
        </div>

        <ul id="Nav_Bar">
            <li><a href="../Home">Home</a></li>
            <li hidden><a href="../About">About</a></li>
            <li hidden><a href="../FAQ">FAQ</a></li>
            <li hidden><a href="../Contact">Contact</a></li>
            <li id="Profile_Button"><a href="../Profile">Profile</a></li>
        </ul>
    
    <h1>Inventory</h1>
    <section>
        <!-- display a table of the inventory -->
        <table>
            <tr>
                <th>Consumable</th>
                <th>Amount In Stock</th>
                <th>Amount Ordered</th>
                <th>Reason</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($inventory as $consumable) : ?>
            <tr>
                <td><?php echo $consumable['consumable_name']; ?></td>
                <td><?php echo $consumable['amount_in_stock']; ?></td>
                <td><?php echo $consumable['amount_ordered']; ?></td>
                <td><?php echo $consumable['reason']; ?></td>
                <td><form action="delete_consumable.php" method="post">
                    <input type="hidden" name="consumable_id"
                           value="<?php echo $consumable['consumable_id'];?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_consumable_form.php">Add Item to Inventory</a></p>
    </section>
</body>
</html>