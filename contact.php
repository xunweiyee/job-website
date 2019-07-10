<html>
<head><title>Find Job</title></head>
	<?php require("style.php"); ?>

<style>
html,body,h1,h2,h3,h4,h5,h6 {
	font-family: "Roboto", sans-serif;
}


.logo{
	padding:3px;
	margin-left:10px;
	width:250px;
	height:auto;

}

.content{
	display: block;
    padding:50px;
	max-width:2500px;
	margin-left:490px;
}


</style>

<body>
		<?php require("navigation.php"); ?><br><br><br>

	<!-- Side Navigation -->
<!-- <nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme" style=font-size:24px;>Find Job</h1>
  <a href="Landing.html" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">My Jobs</a>
  <a href="#" class="w3-bar-item w3-button">Profile</a>
  <a href="#" class="w3-bar-item w3-button">Contact Us</a>
  <button class="w3-bar-item  w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>

</nav> -->

<!-- Header -->
<header class="w3-container w3-padding w3-theme " id="myHeader">
  <!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> -->
  <div class="w3-center">
  <h4>Awesome Job Finder</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"><img class="logo" src="logo.png"></h1>

  </div>
</header>

<div class="w3-main" style="margin-left:10%; margin-right:10%">
<div class="w3-container">
<h1><b>Contact Us</b></h1>
</div>
<div class="w3-row-padding">
<div class="w3-third w3-container w3-margin-bottom">
<div class="w3-container w3-white">
<p><b>Kuala Lumpur</b></p>
<p>FindJob.com Sdn Bhd
Unit 10, level 5, Menara Jaya Square,
No. 140-7, Jalan Maju Jaya,
55050 Kuala Lumpur, Malaysia.</p>
<br></br>
<p class="w3-small">Tel: +60-3-37798000</p>
<p class="w3-small">Fax: +60-3-37668000</p>
<br></br>
<p class="w3-small w3-text-blue">Email: find-jobs@findjobs.com</p>
</div>
</div>

<div class="w3-third w3-container w3-margin-bottom">
<div class="w3-container w3-white">
<p><b>Penang</b></p>
<p>FindJob.com Sdn Bhd
Level 10, Xenom Building,
2 Jalan Bukit Baru, Jelutong,
13400 Penang, Malaysia.</p>
<br></br>
<p class="w3-small">Tel: +60-4-67898000</p>
<p class="w3-small">Fax: +60-4-37998000</p>
<br></br>
<p class="w3-small w3-text-blue">Email: find-jobs@findjobs.com</p>
</div>
</div>

<div class="w3-third w3-container">
<div class="w3-container w3-white">
<p><b>Melaka</b></p>
<p>FindJob.com Sdn Bhd
No. 10, 15 District,
Taman Bersatu, Alor Gajah,
74600 Melaka, Malaysia.</p>
<br></br>
<p class="w3-small">Tel: +60-6-47858000</p>
<p class="w3-small">Fax: +60-6-11238000</p>
<br></br>
<p class="w3-small w3-text-blue">Email: find-jobs@findjobs.com</p>
</div>
</div>
</div>
<br></br>
<h2>Working hours: 8.00am- 6.00pm (Monday to Friday)</h2>
</div>
<script>
// Side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "30%";
    x.style.fontSize = "20px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>
</html>
