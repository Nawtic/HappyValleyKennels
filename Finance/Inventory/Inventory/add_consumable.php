<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";

// Get the product data
$consumable_id = filter_input(INPUT_POST, 'consumable_id', FILTER_VALIDATE_INT);
$name = filter_input(INPUT_POST, 'name');
$stock = filter_input(INPUT_POST, 'stock', FILTER_VALIDATE_INT);
$ordered = filter_input(INPUT_POST, 'ordered', FILTER_VALIDATE_INT);
$reason = filter_input(INPUT_POST, 'reason');

// Validate inputs
if ($name == null || $stock == null || $stock == false || $ordered == null || $ordered == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO inventory
                 (consumable_name, amount_in_stock, amount_ordered, reason)
              VALUES
                 (:name, :stock, :ordered, :reason)';
    $statement = $db->prepare($query);
    $statement->bindValue(':name', $name);
    $statement->bindValue(':stock', $stock);
    $statement->bindValue(':ordered', $ordered);
    $statement->bindValue(':reason', $reason);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>