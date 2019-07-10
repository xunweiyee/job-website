<html>
<head>
	<title>Landing page</title>
	<?php require("style.php"); ?>
	<style type="text/css">
	.jumbotron{
		background-image: url("landing.jpeg");
		height: 100%;
		width: 100%;
		background-position: center;
		background-repeat:no-repeat;
		background-size:cover;
	}

	html,body,h1,h2,h3,h4,h5,h6 {
		font-family: "Roboto", sans-serif;
	}
	</style>


</head>

<body>
	<div class="landing-page jumbotron">

	<?php require("navigation.php"); ?>



	<div class="w3-display-middle w3-padding-large w3-border w3-wide w3-text-light-black w3-center w3-white" >
			<h1 class="w3-large" style="margin-top:0px;">Find your dream job</h1>
		<a href="login.php" class="w3-left w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity w3-button">LOG IN</a>
		<a href="signup.php" class="w3-right w3-padding-large w3-yellow w3-xlarge w3-wide w3-animate-opacity w3-button">SIGN UP</a>
	</div>

</div>
</body>
</html>
