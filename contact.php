<?php
	session_start();
	$_SESSION['current_page'] = "contact.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="content">
			<h1>Contact</h1>
			<p>Feel free to use the form below or my contact information to get in touch with me!</p>
			<form>
				<div class="form-row">
					<label for="subject">Subject: </label>
					<input type="text" id="subject" name="subject">
				</div> 
				<div class="form-row">
					<label for="email">Email: </label>
					<input type="email" id="email" name="email">
				</div> 
				<div class="form-row">
					<label for="message">Message: </label>
					<input type="textarea" id="message" name="message">
				</div> 
			</form>

			<h3>Email: me@timothylew.com</h3>
		</div>
	</div>
</body>
</html>