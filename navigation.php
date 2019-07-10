<div class="w3-top">
	<div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:2px;">
		<a href="Landing.php"><img src="logo.png" alt="logo" width="8%" height="4%" style="margin-top: 3px;"></a>
		<div class="w3-right w3-hide-smal">
			<a class="w3-bar-item">
				<div class="search-container">
					<form action="job.php" method="post" name="submit">
						<input type="text" name="key" placeholder="Search...">
						<button name="submit" type="submit" style="float:right; padding:6px 10px; margin-top: -0.4px;margin-right: 16px; background: #ddd;font-size: 17px;border: none;cursor: pointer;" >
							<i class="fa fa-search"></i>
						</button>
					</form>
				</div>
			</a>
			<a href="landing.php" class="w3-bar-item w3-button">Home</a>
			<a href="contact.php" class="w3-bar-item w3-button"> Contact Us</a>
			<a href="job.php" class="w3-bar-item w3-button">My Jobs</a>
			<a href="profile.php" class="w3-bar-item w3-button">Profile</a>
			<a class="w3-bar-item w3-button"> Employers</a>
			<?php
				if(isset($_SESSION['login_user'])){
				    echo "<a href='logout.php' class='w3-bar-item w3-butto'>Logout</a>";
				}else{
					echo "<a href='login.php' class='w3-bar-item w3-butto'>Login</a>";
				}
				?>
		</div>
	</div>
</div>
  <!-- Side Navigation
<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
  <h1 class="w3-xxxlarge w3-text-theme" style=font-size:24px;>Find Job</h1>
  <a href="#" class="w3-bar-item w3-button">Home</a>
  <a href="#" class="w3-bar-item w3-button">My Jobs</a>
  <a href="#" class="w3-bar-item w3-button">Profile</a>
  <a href="#" class="w3-bar-item w3-button">Contact Us</a>
  <button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>

</nav>-->

<!-- Header
<header class="w3-container w3-theme w3-padding" id="myHeader">
  <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i>
  <div class="w3-center">
  <h4>Awesome Job Finder</h4>
  <h1 class="w3-xxxlarge w3-animate-bottom"><img src="logo.png"></h1>

  </div>
</header>-->
