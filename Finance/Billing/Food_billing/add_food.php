<?php
$page_creator = "Ashton Paiz";

// Get the product data
$food_id = filter_input(INPUT_POST, 'food_id', FILTER_VALIDATE_INT);
$company = filter_input(INPUT_POST, 'company');
$number = filter_input(INPUT_POST, 'number', FILTER_VALIDATE_INT);
$price = filter_input(INPUT_POST, 'price', FILTER_VALIDATE_INT);
$total = filter_input(INPUT_POST, 'total', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'type');
$specialty = filter_input(INPUT_POST, 'specialty');
$reliability = filter_input(INPUT_POST, 'reliability', FILTER_VALIDATE_INT);

// Validate inputs
if ($company == null || $number == null || $price == null || $price == false) {
    $error = "Invalid product data. Check all fields and try again.";
    include($_SERVER["DOCUMENT_ROOT"]."/HappyValleyKennels/assets/Header/Header.php");
    include($_SERVER['DOCUMENT_ROOT']."/HappyValleyKennels/Finance/financeHeader.php");
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO food_billing
                 (company, number_of_bags, price_per_bag, total_cost, food_type, specialty, reliability)
              VALUES
                 (:company, :number, :price, :total, :type, :specialty, :reliability)';
    $statement = $db->prepare($query);
    $statement->bindValue(':company', $company);
    $statement->bindValue(':number', $number);
    $statement->bindValue(':price', $price);
    $statement->bindValue(':total', $total);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':specialty', $specialty);
    $statement->bindValue(':reliability', $reliability);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    header('location: index.php');
}
?>
