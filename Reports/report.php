<?php
$page_creator = "Alexa Miller";
include "../assets/Header/Header.php";

require_once('database.php');
if (!isset($ID)) {
    $ID = filter_input(
        INPUT_GET,
        'ID',
        FILTER_VALIDATE_INT
    );
    if ($ID == NULL || $ID == FALSE) {
        $ID = 1;
    }
}
$queryReports = 'SELECT * FROM scheduling
                  WHERE ID = :ID';
$statement1 = $db->prepare($queryReports);
$statement1->bindValue(':ID', $ID);
$statement1->execute();
$reports = $statement1->fetchAll();
$statement1->closeCursor();
$title = 'Reports';
?>

<!DOCTYPE html>

<html>

<head>
    <title>Happy Valley Kennels</title>
    <link rel="stylesheet" type="text/css" href="../reports.css">
    <link rel="stylesheet" type="text/css" href="reports.css">
</head>

<body>

    <!-- Content of this div should be unique to each page -->
    <div id="Page_Content">
        <section>
            <table>
                <caption>
                    <h3>Reports</h3>
                </caption>
                <thead>
                    <tr>
                        <th class="left">Owner Name(s)</th>
                        <th class="left">Email</th>
                        <th class="left">Dog Name(s)</th>
                        <th class="left">Breed</th>
                        <th class="left">Phone</th>
                        <th class="left">Address</th>
                        <th class="left">Dog Gender</th>
                        <th class="left">Size</th>
                        <th class="left">Date Start</td>
                        <th class="left">Date End</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($reports as $report) : ?>
                        <tr class="blue">
                            <td><?php echo $report['Name']; ?></td>
                            <td><?php echo $report['Email']; ?></td>
                            <td><?php echo $report['DogName']; ?></td>
                            <td><?php echo $report['Breed']; ?></td>
                            <td><?php echo $report['Phone']; ?></td>
                            <td><?php echo $report['Address']; ?></td>
                            <td><?php echo $report['Gender']; ?></td>
                            <td><?php echo $report['Size']; ?></td>
                            <input type="hidden" name="ID" value="<?php echo $report['Id']; ?>">
                            <td class="right"><?php echo $report['CheckIn']; ?></td>
                            <td class="right"><?php echo $report['CheckOut']; ?></td>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </div>
</body>

</html>

<?php
include("../assets/Footer/Footer.php");
?>