<body>
	<div class="navbar">
		<img class="profile-image" src="img/profile.png">
		<p class="nav-about nav-link">About Me</p>
		<p class="nav-projects nav-link">Projects</p>
		<p class="nav-contact nav-link">Contact</p>

		<?php include 'footer.php'; ?>
	</div>

	<script type="text/javascript">
		document.querySelector(".nav-about").classList.remove("selected-nav-item");
		document.querySelector(".nav-projects").classList.remove("selected-nav-item");
		document.querySelector(".nav-contact").classList.remove("selected-nav-item");

		document.querySelector(".nav-about").addEventListener("click", function() {
			window.location.href = "index.php";
		});

		document.querySelector(".nav-projects").addEventListener("click", function() {
			window.location.href = "projects.php";
		});

		document.querySelector(".nav-contact").addEventListener("click", function() {
			window.location.href = "contact.php";
		});

		<?php
			if($_SESSION['current_page'] == "index.php") {
				echo 'document.querySelector(".nav-about").classList.add("selected-nav-item");';
			}
			else if($_SESSION['current_page'] == "projects.php") {
				echo 'document.querySelector(".nav-projects").classList.add("selected-nav-item");';
			}
			else if($_SESSION['current_page'] == "contact.php") {
				echo 'document.querySelector(".nav-contact").classList.add("selected-nav-item");';
			}
		?>

	</script>
</body>
