<?php
	session_start();
	$_SESSION['current_page'] = "index.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Timothy Lew</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i&display=swap" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.png"/>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="error"></div>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="content">
			<div class="main">
				<h1>Timothy Lew</h1>
				<p>Product Management &bull; Software Engineering</p>
			
				<div>
					<img src="img/icon_linkedin.png" id="icon-linkedin" class="icon">
					<img src="img/icon_twitter.png" id="icon-twitter" class="icon">
					<img src="img/icon_github.png" id="icon-github" class="icon">
				</div>

				<p class="paragraph">As an aspiring product manager, I love building the <em>right things</em> for the <em>right people</em>, 
				whether that's a mobile or web app, an online ad-campaign, or just some cool Slack emojis.  If 
				you'd like to work on something with me, chat over boba, or throw a Quaffle together 
				(fun fact: I played competitive Quidditch in college!), feel free to get in touch!</p>

				<button id="view-resume">View Resume</button>

				<br>
				<br>
				<br>

				<p class="paragraph">Recent updates and positions:</p>
				<ul>
					<li>Graduated from Product School, Product Management Certificate</li>
					<li>Course Hero, Software Engineer II</li>
					<li>Graduated from the University of Southern California, B.S. Computer Science and Business Administration</li>
					<li>USC Computer Science Department, Course Producer</li>
					<li>Course Hero, Software Engineering Intern</li>
					<li>Course Hero, Business Development Intern</li>
					<li>Startup Grind, Digital Marketing Intern</li>
				</ul>
				<br>
			</div>
			<?php include 'footer.php'; ?>
		</div>
	</div>

	<script type="text/javascript">
		document.querySelector("#view-resume").addEventListener("click", function() {
			window.open("docs/resume.pdf", "_blank");
		});

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
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/timothylew/30', text: 'Schedule a meeting', color: '#276EF1', textColor: '#ffffff', branding: false });</script>
</body>
</html>