<?php 
session_start();
require_once('email_connection.php');
unset($_SESSION['error']);

if($_POST['action']=='email_input') {
	if(!empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		mysqli_query($connection, "INSERT INTO emails (email, created_at) VALUES ('{$_POST['email']}', NOW())");
		header("Location:email_success2.php");		


	} else {
		$_SESSION['error'] = "Invaild Email";
		header("Location: email_validation.php");
	}
}
if($_POST['action']=='delete' && !empty($_POST['deletebox'])) {
	foreach ($_POST['deletebox'] as $value) {
		mysqli_query($connection, "DELETE FROM `email_validation`.`emails` WHERE `ID`='$value';");
	}
	header("Location:email_success2.php");
} else {
	header("Location:email_success2.php");
}




 ?>