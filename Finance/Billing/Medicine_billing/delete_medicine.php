<?php
 $page_creator = "Ashton Paiz";

require_once('database.php');

// Get IDs
$medicine_id = filter_input(INPUT_POST, 'medicine_id', FILTER_VALIDATE_INT);

// Delete the med_idicine from the database
if ($medicine_id != false) {
    $query = 'DELETE FROM medicine_billing
              WHERE medicine_id = :medicine_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':medicine_id', $medicine_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
header('location: index.php');