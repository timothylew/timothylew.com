<?php
	session_start();
	$_SESSION['current_page'] = "contact.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i&display=swap" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.png"/>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="content">
			<div class="main">
				<div>
					<h1>Contact</h1>
					<p>Email: contact@timothylew.com</p>
					<div>
						<img src="img/icon_linkedin.png" id="icon-linkedin" class="icon">
						<img src="img/icon_twitter.png" id="icon-twitter" class="icon">
						<img src="img/icon_github.png" id="icon-github" class="icon">
					</div>
				<!-- <div class="calendly-inline-widget" data-url="https://calendly.com/timothylew/30" style="min-width:320px;height:630px;"></div>
				<script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script> -->
				</div>
			</div>
			<?php include 'footer.php'; ?>
		</div>	
	</div>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">
	document.querySelector("#icon-github").addEventListener("click", function(){
		window.open("https://www.github.com/timothylew", "_blank");
	});
	document.querySelector("#icon-linkedin").addEventListener("click", function() {
		window.open("https://www.linkedin.com/in/timothylew", "_blank");
	});
	document.querySelector("#icon-twitter").addEventListener("click", function() {
			window.open("https://www.twitter.com/timothylewSF", "_blank");
	});
</script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/timothylew/30', text: 'Schedule a meeting', color: '#276EF1', textColor: '#ffffff', branding: false });</script>
</body>
</html>