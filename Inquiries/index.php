<?php
$page_creator = "John Luke Roberts";
include "../assets/Header/Header.php";

$servername = "localhost";
$username = "root";
$password = "";
$conn = new
	PDO("mysql:host=$servername;
dbname=faq", $username, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	foreach (array_keys($_POST) as $id) {
		$sql = "DELETE FROM inquiry
			WHERE id = " . $id;
		$conn->exec($sql);
	}
}

$sql = "SELECT * FROM inquiry 
	ORDER BY recency asc;";
$query = $conn->prepare($sql);
$query->execute();
$table = $query->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="HVK_employInt.css">
<title>FAQ Management</title>


<body>
	<div id="Page_Content">
		<div style="width: 10%, 90%;">
			<p>
				This interface will allow for inquiries from the website to be managed and answered to be displayed on the web page.
				The table will display all of the most recent submissions from site users. Once one or multiple submissions have been
				read, one or more can be deleted at the same time by selected each questions corresponding check-box and clicking the delete button. Answers to the questions
				can also be submitted through this interface. Type out the general question that is going to be answered into the corresponding
				text box. It can be paraphrased to account for multiple question submissions that have the same general inquiry. Type
				out the answer as how it will be displayed on the website in the indicated text box. Once this is done correctly, click
				the "submit" button.
			</p>
		</div>
		<div>
			<div>
				<h1>Delete Questions</h1>
				<form action="index.php" method="POST">

						<table>
							<tr>
								<th>Inquiry</th>
								<th class="date">Date</th>
								<?php
								foreach ($table as $row) {
									echo ("<tr>");
									echo ("<td><input type = 'checkbox' name = " . $row["id"] . ">" . $row["question"] . "</td>");
									echo ("<td>" . $row["recency"] . "</td>");
									echo ("</tr>");
								}
								?>
							</tr>
						</table>
					</div>
					<div style="justify-content: center; display: flex; flex-direction: row;">
						<button class="sub_button">Delete</button>
					</div>
				</form>

				<h1>Respond To Questions</h1>
				<form action="confirmation.php" method="POST" id="answer_form">
					<input name="question" placeholder="Summarize question" required>
					<textarea name="response" placeholder="Type answer" required></textarea>
					<button class="sub_button">Post</button>
				</form>

		</div>
	</div>

</body>

</html>

<?php
include "../assets/Footer/Footer.php";
?>