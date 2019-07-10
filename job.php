<?php
	include("session.php");
	$sql = "SELECT j.id, j.title, j.specialisation, j.level, j.location, j.salary, j.timestamp, e.name AS empName, c.name AS comName FROM job j JOIN employer e ON j.employerID = e.id JOIN company c ON j.companyID = c.id";

	$key = "";
	$location = "";
	$specialisation = "";
	$minsal = "";

	if(isset($_POST['submit'])){
			$key = $_POST['key'];
		  $location = "";
		  $specialisation = "";
		  $minsal = "";
		}

	  if(isset($_POST['search']))
	  {
		  $key = $_POST['key'];
		  $location = $_POST['location'];
		  $specialisation = $_POST['specialisation'];
		  $minsal = $_POST['minsal'];

			// echo $key;
			// echo $location;
			// echo $specialisation;
			// echo $minsal;
			// echo "<br>";

		}

			if (((($key) || ($location) || ($specialisation) || ($minsal)))) {
				$sql = $sql . ' WHERE ';
			}
			if ($key) {
			    $sql = $sql . 'j.title LIKE ' . "'%" . $key . "%'";
					if (((($location) || ($specialisation) || ($minsal)))) {
						$sql = $sql . ' AND ';
					}
			}

			if ($location) {
					$sql = $sql . 'j.location = ' . "'" . $location . "'";
					if (((($specialisation) || ($minsal)))) {
						$sql = $sql . ' AND ';
					}
			}

			if ($specialisation) {
					$sql = $sql . 'j.specialisation = ' . "'" . $specialisation . "'";
					if (((($minsal)))) {
						$sql = $sql . ' AND ';
					}
			}

			if (((($minsal)))) {
				$sql = $sql . 'j.salary >= ' . $minsal;
			}

			// echo $sql;

?>

<html>
<head><title>Find Job</title>

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
		max-width:3000px;


	}

	 /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
	    .row.content {height: auto;
		width:80%;
		}
		.column.content {
			height:auto;
			width:75%;
			margin-top: -35px;
		}

	    /* Set gray background color and 25% height */
	    .sidenav {
	      background-color: #f1f1f1;
	      height: auto;

	    }

		 /* On small screens, set height to 'auto' for sidenav and grid */
	    @media screen and (max-width: 767px) {
	      .sidenav {
	        height: auto;
	        padding: 15px;
	      }
			}

	</style>
</head>
<body>
	<?php require("navigation.php"); ?>
	<br><br><br>

	<!-- Side Navigation -->
	<!-- <nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
		<h1 class="w3-xxxlarge w3-text-theme" style=font-size:24px;>Find Job</h1>
		<a href="#" class="w3-bar-item w3-button">Home</a>
		<a href="#" class="w3-bar-item w3-button">My Jobs</a>
		<a href="#" class="w3-bar-item w3-button">Profile</a>
		<a href="#" class="w3-bar-item w3-button">Contact Us</a>
		<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
	</nav> -->


<!-- Header -->
	<header class="w3-container w3-theme w3-padding" id="myHeader">
		<!-- <i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i> -->
		<div class="w3-center">
			<h4 style="text-align: center;"><b>Awesome Job Finder</b></h4>
			<img src="logo.png" class="logo" alt="Logo" align="middle">
			<div><br></div>
		</div>
	</header>
	<br>

<div class="container-fluid" >
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h3>Search Criteria</h3>
	  <form id="search_criteria_form" name ="search" method="post" action= "<?php echo $_SERVER['PHP_SELF']?>">
      <div id="qsConOpt">
	  <ul class="nav nav-pills nav-stacked">
		<li>
			<div class="form-group" id="qsKey">
				<input class="qsInputKey form-control no-email" id="key" name="key" placeholder="Job Title or Keywords..." type="text" value="" title="Job Title or Keywords ..." maxlength="100" autocomplete="off">
			</div>
		</li>

		<li>
			<div class="form-group" id="qsLoc" name="qsLoc">
				<select class="form-control" name="location" id="location">
					<option value="">All Locations</option>
						<option value="Johor" class="opt-location">Johor</option>
						<option value="Kedah" class="opt-location">Kedah</option>
						<option value="Kelantan" class="opt-location">Kelantan</option>
						<option value="Kuala Lumpur" class="opt-location">Kuala Lumpur</option>
						<option value="Labuan" class="opt-location">Labuan</option>
						<option value="Melaka" class="opt-location">Melaka</option>
						<option value="Negeri Sembilan" class="opt-location">Negeri Sembilan</option>
						<option value="Pahang" class="opt-location">Pahang</option>
						<option value="Penang" class="opt-location">Penang</option>
						<option value="Perak" class="opt-location">Perak</option>
						<option value="Perlis" class="opt-location">Perlis</option>
						<option value="Putrajaya" class="opt-location">Putrajaya</option>
						<option value="Sabah" class="opt-location">Sabah</option>
						<option value="Sarawak" class="opt-location">Sarawak</option>
						<option value="Selangor" class="opt-location">Selangor</option>
						<option value="Terengganu" class="opt-location">Terengganu</option>

					</select>
				</div>
		</li>

		<li>
			<div class="form-group" id="qsSpec" name="qsSpec">
				<select class="form-control" name="specialisation" id="specialisation">
					<option  value="">All Specialisations</option>
          <option  value="Accounting/Finance">Accounting/Finance</option>
          <option  value="Admin/Human Resources">Admin/Human Resources</option>
          <option  value="Arts/Media/Communications">Arts/Media/Communications</option>
          <option  value="Building/Construction">Building/Construction</option>
          <option  value="Computer/Information Technology">Computer/Information Technology</option>
          <option  value="Education/Training">Education/Training</option>
          <option  value="Engineering">Engineering</option>
          <option  value="Healthcare">Healthcare</option>
          <option  value="Hotel/Restaurant">Hotel/Restaurant</option>
          <option  value="Manufacturing">Manufacturing</option>
          <option  value="Sales/Marketing">Sales/Marketing</option>
          <option  value="Sciences">Sciences</option>
          <option  value="Services">Services</option>
          <option  value="Others">Others</option>
        </select>
      </div>
    </li>

		<li>
			<div class="form-group " id="qsSalary" name="qsSalary">
				<input class="qsInputSalary form-control" id="salary" name="minsal" autocomplete="off" type="text" value="" placeholder="Minimum Salary(MYR)"/>
			</div>
		</li>

		<li>
			<div class="form-group search-criteria-button " id="qsSeBtn">
				<button class="Search-Button btn btn-default" id="search" name="search" value="Search" onclick="#" title="Search Jobs Now"><strong>Search</strong></button>
			</div>
		</li>
      </ul><br>
	 </div>
	</form>
	  </div>

<!-- --------------------------------------------------------------------------------------------------------------------------------- -->
    <div class="col-lg-5 column content">
      <h4><small>JOBS AVAILABLE</small></h4>

      <?php
         $result = mysqli_query($db,$sql);
         if (!$result)
          {
          echo("Error description: " . mysqli_error($db));
          }

         if (mysqli_num_rows($result) > 0)
         {


           // iterate over record set
           // print each field
           while ($row = mysqli_fetch_array($result))
           {
              echo '<div>';
              echo '<h3>' . $row['title'] . '</h3>';
              $date = date('d F Y', strtotime($row["timestamp"]));
              echo '<h5><span class="glyphicon glyphicon-time"></span> Posted by ' . $row['empName'] . ', ' . $date . '</h5>';
              echo '<h5><span class="label label-primary">'. $row['level'] . '</span>';
              echo '<br><br><br>';
							echo '<p>Company: ' . $row['comName'] . '</p>';
							echo '<p>Salary: RM ' . $row['salary'] . '</p>';
              echo '<p>Location: ' . $row['location'] . '</p>';
							echo '<form action = "apply.php" method = "post">';
							echo '<input type="hidden" name="title" value="' . $row['title'] . '">';
							echo '<input type="hidden" name="comName" value="' . $row['comName'] . '">';
							echo '<input type="hidden" name="level" value="' . $row['level'] . '">';
							echo '<input type="hidden" name="salary" value="' . $row['salary'] . '">';
							echo '<input type="hidden" name="location" value="' . $row['location'] . '">';
							echo '<input type="hidden" name="jobid" value="' . $row['id'] . '">';


              echo '<p><input type = "submit" name="submit" value="Apply" class="w3-button w3-theme" style="float:right;"></p>';
              // echo '<p><a class="w3-button w3-theme" style="float:right;">Apply</a></p>';
							echo '</form>';
              echo '</div>';
              echo '<br>';
              echo '<hr>';


           }
         }
         else
         {
           //print error message
           echo 'No job found';
         }
       ?>

    	</div><br><br>
    	<hr>
    </div>
	</div>
</div>



  <!-- Pagination -->
  <!-- <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div> -->

	<!-- Footer -->
<footer class="w3-container w3-theme-dark w3-padding-16">
  <h3>Find job</h3>
  <p>Powered by the Brilliant Team.</p>
  <p>Remember to give us grade A.</a></p>
</footer>



























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
