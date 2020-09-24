<body>
	<div class="navbar">
		<img class="profile-image" src="img/profile.png">
		<p class="nav-about nav-link">About</p>
		<p class="nav-projects nav-link">Projects</p>
	</div>

	<script type="text/javascript">
		document.querySelector(".nav-about").classList.remove("selected-nav-item");
		document.querySelector(".nav-projects").classList.remove("selected-nav-item");

		document.querySelector(".nav-about").addEventListener("click", function() {
			window.location.href = "index.php";
		});

		document.querySelector(".nav-projects").addEventListener("click", function() {
			window.location.href = "projects.php";
		});

		<?php
			if($_SESSION['current_page'] == "index.php") {
				echo 'document.querySelector(".nav-about").classList.add("selected-nav-item");';
			}
			else if($_SESSION['current_page'] == "projects.php") {
				echo 'document.querySelector(".nav-projects").classList.add("selected-nav-item");';
			}
		?>

	</script>
</body>
