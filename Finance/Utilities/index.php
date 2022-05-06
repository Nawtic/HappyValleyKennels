<?php
 $page_creator = "Ashton Paiz";

include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";
include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php";

require_once('database.php');

// Get utility ID
if (!isset($utility_id)) {
    $utility_id = filter_input(INPUT_GET, 'utility_id', 
            FILTER_VALIDATE_INT);
    if ($utility_id == NULL || $utility_id == FALSE) {
        $utility_id = 1;
    }
}

// Get name for selected utility

// Get all utilitys
$query = 'SELECT * FROM utility_billing
                       ORDER BY utility_id';
$statement = $db->prepare($query);
$statement->execute();
$utilities = $statement->fetchAll();
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
        
    <h1>Utility Billing</h1>
    <section>
        <!-- display a table of the inventory -->
        <table>
            <tr>
                <th>Type</th>
                <th>Payment Last Month($)</th>
                <th>Payment Last Year($)</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($utilities as $utility) : ?>
            <tr>
                <td><?php echo $utility['utility_type']; ?></td>
                <td><?php echo $utility['last_month_payment']; ?></td>
                <td><?php echo $utility['last_year_payment']; ?></td>
                <td><form action="delete_utility.php" method="post">
                    <input type="hidden" name="utility_id"
                           value="<?php echo $utility['utility_id'];?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_utility_form.php">Add Item to utility Bill</a></p>
    </section>
</body>
</html>