<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";

// Get the product data
$medcicine_id = filter_input(INPUT_POST, 'medcicine_id', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'type');
$number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$total = filter_input(INPUT_POST, 'total', FILTER_VALIDATE_INT);

// Validate inputs
if ($type == null || $number == null || $number == false || $price == null || $price == false || $total == null || $total == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO medicine_billing
                 (medicine_type, number_of_containers, price_per_container, total_cost)
              VALUES
                 (:type, :number, :price, :total)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':number', $number);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':total', $total);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>

