<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Email validation</title>
 	<link rel="stylesheet" href="email_validation.css">
 </head>
 <body>
 	<div class="validationDiv">
	 	<h2>Please Enter Your Email In Below:</h2>
	 	<form action="process_email.php" method="post">
	 		<input type="hidden" name="action" value="email_input">
	 		<p>Email:</p><input type="text" name="email">
	 		<input type="submit" name="submit">
	 	</form>
	 	<h5>
	 	<?php 
	 			if(isset($_SESSION['error'])){
	 				echo"{$_SESSION['error']}";
	 			} ?>
	 	</h5>
	 </div>
 </body>
 </html>