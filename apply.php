<?php
   include('session.php');
?>
<html>
<head>
<title></title>
</head>

	<?php require("style.php"); ?>
<style>
	html,body,h1,h2,h3,h5,h6
	{
	font-family: "Roboto", sans-serif;
	}

	.logo
	{
	padding:3px;
	margin-left:10px;
	width:250px;
	height:100px;
	}

	.container
	{
	width:1200px;
	}
</style>

<body>
	<?php require("navigation.php"); ?>
	<br><br><br>

	<!-- Header -->
	<header class="w3-container w3-theme w3-padding" id="myHeader">
		<div class="w3-center">
			<h4 style="text-align: center;"><b>Awesome Job Finder</b></h4>
			<img src="logo.png" class="logo" alt="Logo" align="middle">
			<div><br></div>
			<!-- <div class="container">
			<form id="search_criteria_form" name ="search" method="get" action="header_search_process.php">
				<div id="headersearch col-lg-1">
				<input class="headerInputKey form-control no-email" id="key" name="key" placeholder="Search Jobs By Title, Skills or Keywords" type="text" value="" title="Job Title or Keywords ..." maxlength="100" autocomplete="off" width="20">
				<br><button class="header-Search-Button btn btn-success" id="headersearch" value="header-Search" onclick="#" title="Search Jobs Here" style="color: #000000"><strong>Search</strong></button>
				</div> -->
			</form>
			</div>
	</header>
	<br><br>

	<div class="container">
		<div class="jumbotron">
		<table id="application">
			<th></th>
			<!--populate table from mysql database-->
			<?php //while($row= mysqli_fetch_array($search_result));?>
			<tr>
				<td class="container jumbotron col-lg-5">
					<div>
						<?php //echo $row['job'];?><h2><?php echo $_POST['title'];?></h2>
						<?php //echo $row['company'];?><p style="font-size:16px;"><span class="glyphicon glyphicon-road"></span> <?php echo $_POST['comName'];?></p>
						<?php//echo $row['job-level'];?><p style="font-size:16px;"><span class="glyphicon glyphicon-briefcase"></span> <?php echo $_POST['level'];?></p>
					</div>
				</td>

				<td class="container jumbotron col-lg-4">
					<div>
						<br><br><br><br>
						<?php //echo $row['salary'];?><p style="font-size:16px;"><span class="glyphicon glyphicon-usd"> <?php echo $_POST['salary'];?></span></p>
						<?php //echo $row['location'];?><p style="font-size:16px;"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $_POST['location'];?></p>
					</div>
				</td>
			</tr>
		</table>
	</div>


	<div class="resume-summary container" id="resume_summary" style="width:2770px;">
		<div class="media jumbotron col-lg-5">
			<div class="media-body">
				<h3 class="candidate-name" id="candidate-name"><strong><?php echo $row['name'] ?></strong></h3>
				<ul class="list-inline">
					<!-- <li class="candidate-salary" id="candidate_salary">
					<p style="font-size:16px;"><span class="glyphicon glyphicon-usd"></span> 1000</p> -->
					</li>

					<li class="candidate-email" id="candidate_email">
					<p style="font-size:16px;"><span class="glyphicon glyphicon-envelope"></span> <?php echo $row['email'] ?></p>

					</li>

					<!-- <li class="candidate-phone" id="candidate_phone">
					</li> -->
				</ul>
			</div>
			<hr>

			<!-- <div>
				<form action="upload.php" method="post" enctype="multipart/form-data">
					Select your resume to upload (image form, only JPG, JPEG, PNG & GIF files are allowed.):
					<input type="file" name="fileToUpload" id="fileToUpload">

				</form>
			</div> -->


         <form action="upload.php" method='post' enctype="multipart/form-data">
        <input type="file" name="file"/><br><br>
        	<input type="hidden" name="jobid" value="<?php echo $_POST['jobid'] ?>">
        <input type="submit" name="submit" value="Upload"/>

        </form>

   </div>
		</div>

	</div>
	</div>
<!-- </div> -->


	<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Find job</h3>
  <p>Powered by the Brilliant Team.</p>
  <p>Remember to give us grade A.</a></p>
</footer>

</body>
</html>
