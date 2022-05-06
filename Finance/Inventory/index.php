<?php
 $page_creator = "Ashton Paiz";

include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";
include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php";


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