<!DOCTYPE html>
<html>
<head>
	<title>Timothy Lew</title>
	<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="error"></div>
	<div class="container">
		<div class="navbar">
			<img class="profile-image" src="img/profile.png">
			<p>ABOUT</p>
			<p>PROJECTS</p>
			<p>CONTACT</p>
		</div>
		<div class="content">
			<h1>Timothy Lew</h1>
			<p>Software Engineer and Aspiring Product Manager</p>
			<p>University of Southern California C/O 2018</p>
			<button id="view-resume">Resume</button>
			<button id="view-linkedin">LinkedIn</button>
			<button id="view-github">Github</button>

			<div class="projects">
				<p>Here are some of the cool projects I've worked on!  Feel free to look around on my <a href="https://www.github.com/timothylew" target="_blank">Github</a> as well.</p>
				<img src="img/VC.png" style="width:35%;">
				<a href="" target="_blank">Fantasy VC</a>
				<img src="img/CP.png" style="width:35%;">
				<a href="" target="_blank">CP Tutoring</a>
				<a href="http://trojanmotors.com" target="_blank">Trojan Motors</a>
				<a href="http://lucidity.timothylew.com" target="_blank">Lucidity</a>
			</div>
		</div>
	</div>

	<?php include 'footer.php'; ?>

	<script type="text/javascript">
		document.querySelector("#view-resume").addEventListener("click", function() {
			window.open("docs/resume.pdf", "_blank");
		});

		document.querySelector("#view-linkedin").addEventListener("click", function() {
			window.open("https://www.linkedin.com/in/timothylew", "_blank");
		});

		document.querySelector("#view-github").addEventListener("click", function() {
			window.open("https://www.github.com/timothylew", "_blank");
		});

	</script>

</body>
</html>