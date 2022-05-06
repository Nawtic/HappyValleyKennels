<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";

require_once('database.php');

// Get IDs
$utility_id = filter_input(INPUT_POST, 'utility_id', FILTER_VALIDATE_INT);

// Delete the med_idicine from the database
if ($utility_id != false) {
    $query = 'DELETE FROM utility_billing
              WHERE utility_id = :utility_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':utility_id', $utility_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');