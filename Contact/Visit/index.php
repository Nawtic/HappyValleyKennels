<?php
$page_creator = "Mauricio Alfaro";
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Header/Header.php");
?>

<!DOCTYPE html>
<html>

<head>
	<title> Contact us </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div id="Page_Content">
		<form method="post">
			<h1> Kennel appointment for any other concerns </h1>
			<h3> If you feel that you need more information you can make an appointment to our kennel </h3>
			<h3>''<h /3>
					<h4> We are pleased to help you! </h4>
					<input type="text" name="name" placeholder="Your name">
					<input type="text" name="dog" placeholder="Name of your dog/s">
					<input type="email" name="email" placeholder="Your Email">
					<input type="text" name="concern" placeholder="Brief explanation of your concern">
					<input type="submit" name="register">
		</form>
		<?php
		include("registrar.php");
		?>
	</div>
</body>

</html>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/HappyValleyKennels/assets/Footer/Footer.php");
?>