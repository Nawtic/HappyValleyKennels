<?php
$page_creator = "Ashton Paiz";
include($_SERVER["DOCUMENT_ROOT"]."/HappyValleyKennels/assets/Header/Header.php");
include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php");

require_once('database.php');

// Get food ID
if (!isset($food_id)) {
    $food_id = filter_input(INPUT_GET, 'food_id', 
            FILTER_VALIDATE_INT);
    if ($food_id == NULL || $food_id == FALSE) {
        $food_id = 1;
    }
}

// Get name for selected food

// Get all foods
$query = 'SELECT * FROM food_billing
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
    <link rel="stylesheet" type="text/css" href="bill_and_inventory.css" />
</head>

<!-- the body section -->
<body>
    
    <h1>Food Billing</h1>
    <section>
        <!-- display a table of the inventory -->
        <table>
            <tr>
                <th>Company</th>
                <th>Number of Bags</th>
                <th>Price per Bag</th>
                <th>Total</th>
                <th>Type</th>
                <th>Specialty</th>
                <th>Reliability</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($foods as $food) : ?>
            <tr>
                <td><?php echo $food['company']; ?></td>
                <td><?php echo $food['number_of_bags']; ?></td>
                <td><?php echo $food['price_per_bag']; ?></td>
                <td><?php echo $food['total_cost']; ?></td>
                <td><?php echo $food['food_type']; ?></td>
                <td><?php echo $food['specialty']; ?></td>
                <td><?php echo $food['reliability']; ?></td>
                <td><form action="delete_food.php" method="post">
                    <input type="hidden" name="food_id"
                           value="<?php echo $food['food_id'];?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_food_form.php">Add Item to Food Bill</a></p>
    </section>
</body>
</html>