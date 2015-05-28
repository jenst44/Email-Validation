<?php 
	session_start();
	require_once('email_connection.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SUCCESS!</title>
	<link rel="stylesheet" href="email_validation.css">
</head>
<body>
	<div id="addressBox" class="validationDiv">
		<h1>Your Email Was Submitted!</h1>
		<p>Return to email submit</p>
		<form action="email_validation.php">
			<input type="submit" value="Return">
		</form>
		<h3>Email Addresses Entered:</h3>
		<?php 
			$query = mysqli_query($connection, "SELECT * FROM emails ORDER BY id DESC"); 
			 ?>
			<table>
				<tr>
					<td>
						<form id="check-form" action="process_email.php" method="post">
							<input type="hidden" name="action" value="delete">
							<input type="submit" value="Delete">
						</form>
					</td>
					<th>ID</th>
					<th>Email</th>
					<th>Date/Time Created</th>
				</tr>
			<?php $i=1;
			foreach($query as $key => $value) 
				{ ?>	
				<tr>
					<td>
						<input form="check-form" type="checkbox" name="deletebox[]" value="<?php echo$value['id']; ?>">
					</td>
					<td><?= $i ?></td>
					<td><?= $value['email'] ?></td>
					<td><?= $value['created_at'] ?></td>
				</tr>
			<?php $i++; } ?>	
			</table>
	</div>
</body>
</html>

