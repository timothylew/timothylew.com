<?php
	session_start();
	$_SESSION['current_page'] = "projects.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
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
				<img src="img/lucidity.png" style="width:20%; height:20%;">
				<div>
					<a href="http://lucidity.timothylew.com" target="_blank">Lucidity</a>
					<p>Lucidity is an online platform that facilitates event management at musical events.  The audience can enter a given code and request songs using the Spotify API.  The DJ or musician will be able to see all requests for an event and modify their sets accordingly.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/trojanmotors.png" style="width:20%;">
				<div>
					<a href="http://trojanmotors.com" target="_blank">Trojan Motors</a>
					<p>Trojan Motors is a car factory simulation game designed to test students' communication and decision making skills. This web application is currently being run and used in the USC Marshall Experiential Learning Center.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/CP.png" style="width:20%;">
				<div>
					<a href="" target="_blank">CP Tutoring</a>
					<p>CP Tutoring is an Android application designed to match students in need of affordable tutors with those who are willing to provide those services at more reasonable rates.</p>
				</div>
			</div>
			<div class="project-item">
				<img src="img/VC.png" style="width:20%;">
				<div>
					<a href="" target="_blank">Fantasy VC</a>
					<p>Fantasy VC is a Java desktop game that allows players to "draft" startup companies similar to how you draft in football leagues.  The game then simulates events that increase or decrease those companies' values.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
