<?php
	session_start();
	$_SESSION['current_page'] = "index.php";
?>

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
		<?php include 'navbar.php'; ?>
		<div class="content">
			<h1>Timothy Lew</h1>
			<p>Software Engineer and Aspiring Product Manager</p>
			<p>
				B.S. Computer Science and Business Administration, May 2018 
				<br>
				University of Southern California
			</p>
			<button id="view-resume">Resume</button>
			<button id="view-linkedin">LinkedIn</button>
			<button id="view-github">Github</button>
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