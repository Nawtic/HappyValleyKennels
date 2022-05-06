<?php

$page_creator = "John Luke Roberts";
include "../assets/Header/Header.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$servername = "localhost";
	$username = "root";
	$password = "";
	$conn = new
		PDO("mysql:host=$servername;
dbname=faq", $username, $password);

	$sql = "INSERT INTO inquiry(question, recency) 
	VALUES('" . $_POST["Inquiry"] . "', NOW())";
	$conn->exec($sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<title>FAQ</title>
<link rel="stylesheet" href="HVKfaq.css">

<body>
	<div id="Page_Content">
		<div id="div2">
			<h1>Welcome!</h1>
			<p>This is our frequently asked questions page. This webpage allows for you
				to search and review any information that many prospectors may have regarding
				our business.
			</p>
			<hr>
			<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$conn = new
				PDO("mysql:host=$servername;
				dbname=faq", $username, $password);

			$sql = "SELECT question, response FROM resp
						ORDER BY id desc
						LIMIT 5";
			$query = $conn->prepare($sql);
			$query->execute();
			$table = $query->fetchAll();
			foreach ($table as $display) {
				echo ("<h2>" . $display["question"] . "</h2>");
				echo ("<div class = 'div3'><p>" . $display["response"] . "</p></div>");
			}
			?>
			<hr>
			<form action="index.php" method="post">
				<div id="form_content">
					<p>Want to send in your own question? Feel free to send us your inquiries in the text box below!</p>
					<textarea placeholder="250 character max" maxlength="250" name="Inquiry" required></textarea>
					<button type="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>

<?php
include "../assets/Footer/Footer.php";
?>