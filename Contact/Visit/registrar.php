<?php

include("con_db.php");

if (isset($_POST['register'])) {
	if (strlen($_POST['name']) >= 1 and strlen($_POST['dog']) >=1 and strlen($_POST['email']) >=1 and strlen($_POST['concern']) >=1) {
		$resultado = mysqli_query($conex, $_SESSION["Message"]);


		$name = trim($_POST['name']);
		$dog = trim($_POST['dog']);
		$email = trim($_POST['email']);
		$fechareg = date("m/d/y");
		$concern = trim($_POST['concern']);
		$resultado = mysqli_query($conex, $_SESSION["Message"]);
		$consulta = "INSERT INTO datos(name, dog, email, concern, received_date, message_id) VALUES ('$name','$dog','$email','$concern','$fechareg', ". mysqli_insert_id($conex) .")";
		$resultado = mysqli_query($conex, $consulta);
		if ($resultado) {
	    	?> 
	    	<h3 class="ok">Your information was sent successfully! We will reach you by e-mail!</h3>
           <?php
		   unset($_SESSION["Message"]);
	    } else {
	    	?> 
	    	<h3 class="bad">An error has occured!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">Please complete all the fields!</h3>
           <?php
    }
}

?>