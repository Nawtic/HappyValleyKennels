<?php
$page_creator = "Ashton Paiz";
include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/assets/Header/Header.php";
include $_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php";


require_once('database.php');

// Get medicine ID
if (!isset($medicine_id)) {
    $medicine_id = filter_input(INPUT_GET, 'medicine_id', 
            FILTER_VALIDATE_INT);
    if ($medicine_id == NULL || $medicine_id == FALSE) {
        $medicine_id = 1;
    }
}

// Get name for selected medicine

// Get all medicines
$query = 'SELECT * FROM medicine_billing
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
    <link rel="stylesheet" type="text/css" href="bill_and_inventory.css" />
</head>

<!-- the body section -->
<body>
        
    <h1>Medicine Billing</h1>
    <section>
        <!-- display a table of the inventory -->
        <table>
            <tr>
                <th>Type</th>
                <th>Number of Containers</th>
                <th>Price per Container($)</th>
                <th>Total Cost($)</th>
                <th>&nbsp;</th>
            </tr>

            <?php foreach ($medicines as $medicine) : ?>
            <tr>
                <td><?php echo $medicine['medicine_type']; ?></td>
                <td><?php echo $medicine['number_of_containers']; ?></td>
                <td><?php echo $medicine['price_per_container']; ?></td>
                <td><?php echo $medicine['total_cost']; ?></td>
                <td><form action="delete_medicine.php" method="post">
                    <input type="hidden" name="medicine_id"
                           value="<?php echo $medicine['medicine_id'];?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="add_medicine_form.php">Add Item to Medicine Bill</a></p>
    </section>
</body>
</html>