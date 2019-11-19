<?php
	session_start();
	$_SESSION['current_page'] = "projects.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i&display=swap" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="container">
		<?php include 'navbar.php'; ?>
		<div class="projects content">
			<h1>Projects</h1>
			<p>Here are some of the cool projects I've worked on!  Feel free to look around on my <a href="https://www.github.com/timothylew" target="_blank">Github</a> as well.</p>


			<div class="project-item">
				<img src="img/uber.png" style="width:20%; height:20%;">
				<div>
					<a href="http://uberbikes.timothylew.com" target="_blank">Uber Bikes</a>
					<p>While earning my product management certificate at <a href="https://www.productschool.com" target="_blank">Product School</a>, I worked on creating a new feature for Uber.  I analyzed Uber's strategy, found and validated an opportunity based on customer pain points, designed a solution and tested its usability, and pitched it to judges.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/lucidity.png" style="width:20%; height:20%;">
				<div>
					<a href="https://github.com/timothylew/lucidity" target="_blank">Lucidity</a>
					<p>Lucidity is an online platform that facilitates event management at musical events.  The audience can enter a given code and request songs using the Spotify API.  The DJ or musician will be able to see all requests for an event and modify their sets accordingly.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/trojanmotors.png" style="width:20%;">
				<div>
					<a href="" target="_blank">Trojan Motors</a>
					<p>Trojan Motors is a car factory simulation game designed to test students' communication and decision making skills. This web application is currently being run and used in the USC Marshall Experiential Learning Center.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/CP.png" style="width:20%;">
				<div>
					<a href="https://github.com/timothylew/CP_Android" target="_blank">CP Tutoring</a>
					<p>CP Tutoring is an Android application designed to match students in need of affordable tutors with those who are willing to provide those services at more reasonable rates.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/VC.png" style="width:20%;">
				<div>
					<a href="https://github.com/timothylew/FantasyVC" target="_blank">Fantasy VC</a>
					<p>Fantasy VC is a Java desktop game that allows players to "draft" startup companies similar to how you draft in football leagues.  The game then simulates events that increase or decrease those companies' values.</p>
				</div>
			</div>
		</div>
	</div>
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/timothylew/30', text: 'Schedule a meeting', color: '#00a2ff', textColor: '#ffffff', branding: false });</script>
</body>
</html>
