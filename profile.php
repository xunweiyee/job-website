<?php
	include("session.php");
?>

<html>
<head><title>Profile</title>

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
			padding-left: 20%;
		max-width:3000px;


	}

	 /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
	    .row.content {height: auto;
		width:80%;
		}
		.column.content {
			height:auto;
			width:100%;
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
    <div class="col-lg-5 column content">
      <h4><small>JOBS APPLIED</small></h4>

      <?php
				$sql = "SELECT a.application, a.timestamp, j.title  FROM application a JOIN seeker s ON a.seekerID = s.id JOIN job j ON a.jobID = j.id WHERE s.id = ". $_SESSION['login_user'];
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
              echo '<h5><span class="glyphicon glyphicon-time"></span> Applied on ' . $date . '</h5>';
              echo '<br>';
							echo '<p>' . $row['application'] . '</p>';
              echo '</div>';
              echo '<br>';
              echo '<hr>';


           }
         }
         else
         {
           //print error message
           echo 'No application found';
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

</body>
</html>
