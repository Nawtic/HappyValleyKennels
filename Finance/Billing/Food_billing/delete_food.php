<?php
$page_creator = "Ashton Paiz";

require_once('database.php');

// Get IDs
$food_id = filter_input(INPUT_POST, 'food_id', FILTER_VALIDATE_INT);

// Delete the f_idood from the database
if ($food_id != false) {
    $query = 'DELETE FROM food_billing
              WHERE food_id = :food_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':food_id', $food_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
header('location: index.php');