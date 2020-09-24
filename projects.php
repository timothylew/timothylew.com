<?php
	session_start();
	$_SESSION['current_page'] = "projects.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Projects</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i&display=swap" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.png"/>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  		<a class="navbar-brand" href="#">Timothy Lew</a>
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
   		<div class="navbar-nav">
     		<a class="nav-item nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
			<a class="nav-item nav-link" href="#">Experience</a>
      		<a class="nav-item nav-link" href="projects.php">Projects</a>
	  		<button class="btn btn-outline-success my-2 my-sm-0 resume" type="button">Download Resume</button>
    </div>
  </div>
</nav>
	<div class="fluid-container">
		<div class="projects content">
			<div class="main">
				<h1>Projects</h1>
				<p>Here are some of the cool projects I've worked on!  Feel free to look around on my <a href="https://www.github.com/timothylew" target="_blank">Github</a> as well.</p>
				<div class = "row">
					<div class="card col-sm" style="width: 25rem;">
						<img class="card-img-top" src="img/uber.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Uber Bikes</h5>
							<p class="card-text">While earning my product management certificate at <a href="https://www.productschool.com" target="_blank">Product School</a>, I worked on creating a new feature for Uber.  I analyzed Uber's strategy, found and validated an opportunity based on customer pain points, designed a solution and tested its usability, and pitched it to judges.</p>
							<a href="http://uberbikes.timothylew.com" class="btn btn-primary">Read full article</a>
						</div>
					</div>
					<div class="card col-sm" style="width: 25rem;">
						<img class="card-img-top" src="img/lucidity.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Lucidity</h5>
							<p class="card-text">Lucidity is an online platform that facilitates event management at musical events.  The audience can enter a given code and request songs using the Spotify API.  The DJ or musician will be able to see all requests for an event and modify their sets accordingly.</p>
							<a href="https://github.com/timothylew/lucidity" class="btn btn-primary">View source code</a>
						</div>
					</div>
					<div class="card col-sm" style="width: 25rem;">
						<img class="card-img-top" src="img/trojanmotors.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Trojan Motors</h5>
							<p class="card-text">Trojan Motors is a car factory simulation game designed to test students' communication and decision making skills. This web application is currently being run and used in the USC Marshall Experiential Learning Center.</p>
							<a href="#" class="btn btn-secondary disabled">Demo discontinued</a>
						</div>
					</div>
					<div class="card col-sm" style="width: 25rem;">
						<img class="card-img-top" src="img/CP.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">CP Tutoring App</h5>
							<p class="card-text">CP Tutoring is an Android application designed to match students in need of affordable tutors with those who are willing to provide those services at more reasonable rates.</p>
							<a href="https://github.com/timothylew/CP_Android" class="btn btn-primary">View demo and source code</a>
						</div>
					</div>
					<div class="card col-sm" style="width: 25rem;">
						<img class="card-img-top" src="img/VC.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Fantasy VC</h5>
							<p class="card-text">Fantasy VC is a Java desktop game that allows players to "draft" startup companies similar to how you draft in football leagues.  The game then simulates events that increase or decrease those companies' values.</p>
							<a href="https://github.com/timothylew/FantasyVC" class="btn btn-primary">View source code</a>
						</div>
					</div>
				</div>
				
		
				<br>
			</div>
		</div>
	</div>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
	<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
	<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/timothylew/30', text: 'Schedule a meeting', color: '#276EF1', textColor: '#ffffff', branding: false });</script>
</body>
</html>
