<?php
$page_creator = "Ashton Paiz";

include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php";
include $_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/Finance/financeHeader.php";

require('database.php');
$query = 'SELECT *
          FROM utility_billing
          ORDER BY utility_id';
$statement = $db->prepare($query);
$statement->execute();
$utilitys = $statement->fetchAll();
$statement->closeCursor();
?>
<!DOCTYPE html>
<html>

<!-- the head section -->

<head>
    <title>Happy Valley Kennels</title>
    <link rel="stylesheet" type="text/css" href="add_form.css">
</head>

<!-- the body section -->

<body>
    <div id="Page_Content">

        <h1>Add Item to utility Bill</h1>
        <form action="add_utility.php" method="post" id="add_utility_form">

            <label>Type:</label>
            <input type="text" name="type"><br>

            <label>Payment Last Month:</label>
            <input type="text" name="last_month"><br>

            <label>Payment Last Year:</label>
            <input type="text" name="last_year"><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Utility"><br>
        </form>
        <p><a href="index.php">View Utility Bill</a></p>
</body>

</html>