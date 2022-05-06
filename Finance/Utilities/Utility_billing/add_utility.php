<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";

// Get the product data
$utility_id = filter_input(INPUT_POST, 'utlity_id', FILTER_VALIDATE_INT);
$type = filter_input(INPUT_POST, 'type');
$last_month = filter_input(INPUT_POST, 'last_month', FILTER_VALIDATE_INT);
$last_year = filter_input(INPUT_POST, 'last_year', FILTER_VALIDATE_INT);

// Validate inputs
if ($type == null || $last_month == null || $last_month == false || $last_year == null || $last_year == false){
    $error = "Invalid product data. Check all fields and try again.";
    include('error.php');
} else {
    require_once('database.php');

    // Add the product to the database  
    $query = 'INSERT INTO utility_billing
                 (utility_type, last_month_payment, last_year_payment)
              VALUES
                 (:type, :last_month, :last_year)';
    $statement = $db->prepare($query);
    $statement->bindValue(':type', $type);
    $statement->bindValue(':last_month', $last_month);
    $statement->bindValue(':last_year', $last_year);
    $statement->execute();
    $statement->closeCursor();

    // Display the Product List page
    include('index.php');
}
?>