<?php
 $page_creator = "Ashton Paiz";
include ".../assets/Header/Header.php";

require_once('database.php');

// Get IDs
$consumable_id = filter_input(INPUT_POST, 'consumable_id', FILTER_VALIDATE_INT);

// Delete the consumable from the database
if ($consumable_id != false) {
    $query = 'DELETE FROM inventory
              WHERE consumable_id = :consumable_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':consumable_id', $consumable_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Product List page
include('index.php');