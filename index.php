<?php
	session_start();
	$_SESSION['current_page'] = "index.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Timothy Lew</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,500,500i&display=swap" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">
	<link rel="icon" type="image/png" href="img/favicon.png"/>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body>
	<div class="error"></div>
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
	<div class="container-fluid">

		<div class ="row">
			<div class="jumbotron">
				<h1 class="display-4">Timothy Lew</h1>
  				<p class="lead">Product Management &bull; Software Engineering</p>
  				<hr class="my-4">
  				<p>Hey there! As an aspiring product manager, I love building the <em>right things</em> for the <em>right people</em>, 
				whether that's a mobile or web app, an online ad-campaign, or just some cool Slack emojis.  If 
				you'd like to work on something with me, chat over boba, or throw a Quaffle together 
				(fun fact: I played competitive Quidditch in college!), feel free to get in touch</p>
  				<p class="lead">
   				<button class="btn btn-primary btn-lg resume">View resume</button>
  				</p>
			</div>
		</div>
			
				<div class="social-icons">
					<img src="img/icon_linkedin.png" id="icon-linkedin" class="icon">
					<img src="img/icon_twitter.png" id="icon-twitter" class="icon">
					<img src="img/icon_github.png" id="icon-github" class="icon">
				</div>

				<div class="alert alert-warning alert-dismissible fade show" role="alert">
  		<strong>Mark your calendars and vote on Tuesday, November 3rd! <a href="https://www.usvotefoundation.org/" target="_blank">Click here</a> to register or learn more.</strong>
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  		</button>
	</div>

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
		</div>
		


	<script type="text/javascript">
		document.querySelector(".resume").addEventListener("click", function() {
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
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
<script type="text/javascript">Calendly.initBadgeWidget({ url: 'https://calendly.com/timothylew/30', text: 'Schedule a meeting', color: '#276EF1', textColor: '#ffffff', branding: false });</script>
</body>
</html>