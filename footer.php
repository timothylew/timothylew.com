<!DOCTYPE html>
<html>
<head>
	<title>Footer</title>
</head>
<body>
	<div class="footer">
		<img src="img/icon_github.png" id="icon-github" class="icon">
		<img src="img/icon_linkedin.png" id="icon-linkedin" class="icon">
		<img src="img/icon_mail.png" id="icon-mail" class="icon">
	</div>
	<div style="text-align: center;">built and designed by timothy lew, copyright 2018.</div>

	<script type="text/javascript">
		document.querySelector("#icon-github").addEventListener("click", function(){
			window.open("https://www.github.com/timothylew", "_blank");
		});
		document.querySelector("#icon-linkedin").addEventListener("click", function() {
			window.open("https://www.linkedin.com/in/timothylew", "_blank");
		});
		document.querySelector("#icon-mail").addEventListener("click", function() {
			window.open("mailto:me@timothylew.com", "_blank");
		});
	</script>
</body>
</html>