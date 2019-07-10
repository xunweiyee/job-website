<?php
   include('session.php');
?>
<html>
<head><title>Find Job</title>

	<?php require("style.php"); ?>

	<style>
	html,body,h1,h2,h3,h4,h5,h6 {
		font-family: "Roboto", sans-serif;
	}


	img{
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

	<!-- Side Navigation -->
	<nav class="w3-sidebar w3-bar-block w3-card w3-animate-left w3-center" style="display:none" id="mySidebar">
		<h1 class="w3-xxxlarge w3-text-theme" style=font-size:24px;>Find Job</h1>
		<a href="#" class="w3-bar-item w3-button">Home</a>
		<a href="#" class="w3-bar-item w3-button">My Jobs</a>
		<a href="#" class="w3-bar-item w3-button">Profile</a>
		<a href="#" class="w3-bar-item w3-button">Contact Us</a>
		<button class="w3-bar-item w3-button" onclick="w3_close()">Close <i class="fa fa-remove"></i></button>
	</nav>


<!-- Header -->
	<header class="w3-container w3-theme w3-padding" id="myHeader">
		<i onclick="w3_open()" class="fa fa-bars w3-xlarge w3-button w3-theme"></i>
		<div class="w3-center">
			<h4 style="text-align: center;"><b>Awesome Job Finder</b></h4>
			<img src="logo.png" alt="Logo" align="middle">
			<div><br></div>
		</div>
	</header>
	<br>

<div class="container-fluid" >
  <div class="row content">
    <div class="col-sm-3 sidenav">
    <h3>Search Criteria</h3>
	  <form id="search_criteria_form" name ="search" method="get" action="search_criteria_process.php">
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
					<option value="1">All Locations</option>
						<optgroup label="Malaysia">
							<option value="11" class="opt-location">Johor</option>
							<option value="12" class="opt-location">Kedah</option>
							<option value="13" class="opt-location">Kelantan</option>
							<option value="14" class="opt-location">Kuala Lumpur</option>
							<option value="15" class="opt-location">Labuan</option>
							<option value="16" class="opt-location">Melaka</option>
							<option value="17" class="opt-location">Negeri Sembilan</option>
							<option value="18" class="opt-location">Pahang</option>
							<option value="19" class="opt-location">Penang</option>
							<option value="20" class="opt-location">Perak</option>
							<option value="21" class="opt-location">Perlis</option>
							<option value="22" class="opt-location">Putrajaya</option>
							<option value="23" class="opt-location">Sabah</option>
							<option value="24" class="opt-location">Sarawak</option>
							<option value="25" class="opt-location">Selangor</option>
							<option value="26" class="opt-location">Terengganu</option>
						</optgroup>

						<optgroup label="Overseas">
							<option value="101" class="opt-location">China</option>
							<option value="102" class="opt-location">Hong Kong</option>
							<option value="103" class="opt-location">India</option>
							<option value="104" class="opt-location">Indonesia</option>
							<option value="105" class="opt-location">Japan</option>
							<option value="106" class="opt-location">Philippines</option>
							<option value="107" class="opt-location">Singapore</option>
							<option value="108" class="opt-location">Thailand</option>
							<option value="109" class="opt-location">Vietnam</option>
						</optgroup>

						<optgroup label="Other Work Locations">
							<option value="1000" class="opt-location">All Other Work Locations</option>
							<option value="110" class="opt-location">Africa</option>
							<option value="111" class="opt-location">Asia - Middle East</option>
							<option value="112" class="opt-location">Asia - Others</option>
							<option value="113" class="opt-location">Australia &amp; New Zealand</option>
							<option value="114" class="opt-location">Europe</option>
							<option value="115" class="opt-location">North America</option>
							<option value="116" class="opt-location">South America</option>
						</optgroup>
					</select>
				</div>
		</li>

		<li>
			<div class="form-group" id="qsSpec" name="qsSpec">
				<select class="form-control" name="specification" id="specification">
					<option  value="2">All Specifications</option>
						<optgroup label="Accounting/Finance">
							<option value="201" class="opt-specification">All Accounting/Finance</option>
							<option value="202" class="opt-specification">Audit & Taxation</option>
							<option value="203" class="opt-specification">Banking/ Financial</option>
							<option value="204" class="opt-specification">Corporate Finance/ Investment</option>
							<option value="205" class="opt-specification">General/Cost Accounting</option>
						</optgroup>

						<optgroup label="Admin/Human Resources">
							<option value="206" class="opt-specification">All Admin/Human Resources</option>
							<option value="207" class="opt-specification">Clerical/Administrative</option>
							<option value="208" class="opt-specification">Human Resources</option>
							<option value="209" class="opt-specification">Secretarial</option>
							<option value="210" class="opt-specification">Top Management</option>
						</optgroup>

						<optgroup label="Arts/Media/Communications">
							<option value="211" class="opt-specification">All Arts/Media/Communications</option>
							<option value="212" class="opt-specification">Advertising</option>
							<option value="213" class="opt-specification">Arts/Creative Design</option>
							<option value="214" class="opt-specification">Entertainment</option>
							<option value="215" class="opt-specification">Public Relations</option>
						</optgroup>

						<optgroup label="Building/Construction">
							<option value="216" class="opt-specification">All Building/Construction</option>
							<option value="217" class="opt-specification">Architect/Interior Design</option>
							<option value="218" class="opt-specification">Civil Engineering/Construction</option>
							<option value="219" class="opt-specification">Property/Real Estate</option>
							<option value="220" class="opt-specification">Quantity Surveying</option>
						</optgroup>

						<optgroup label="Computer/Information Technology">
							<option value="221" class="opt-specification">All Computer/Information Technology</option>
							<option value="222" class="opt-specification">IT-Hardware</option>
							<option value="223" class="opt-specification">IT-Network/System/Database Admin</option>
							<option value="224" class="opt-specification">IT-Software</option>
						</optgroup>

						<optgroup label="Education/Training">
							<option value="225" class="opt-specification">All Education/Training</option>
							<option value="226" class="opt-specification">Education</option>4
							<option value="227" class="opt-specification">Training & Development</option>
						</optgroup>

						<optgroup label="Engineering">
							<option value="228" class="opt-specification">All Engineering</option>
							<option value="229" class="opt-specification">Chemical Engineering</option>
							<option value="230" class="opt-specification">Electrical Engineering</option>
							<option value="231" class="opt-specification">Electronics Engineering</option>
							<option value="232" class="opt-specification">Environmental Engineering</option>
							<option value="233" class="opt-specification">Industrial Engineering</option>
							<option value="234" class="opt-specification">Mechanical/Automotive Engineering</option>
							<option value="235" class="opt-specification">Oil/Gas Engineering</option>
							<option value="236" class="opt-specification">Other Engineering</option>
						</optgroup>

						<optgroup label="Healthcare">
							<option value="237" class="opt-specification">All Healthcare</option>
							<option value="238" class="opt-specification">Doctor/Diagnosis</option>
							<option value="239" class="opt-specification">Pharmacy</option>
							<option value="240" class="opt-specification">Nurse/Medical Support</option>
						</optgroup>

						<optgroup label="Hotel/Restaurant">
							<option value="241" class="opt-specification">All Hotel/Restaurant</option>
							<option value="242" class="opt-specification">Food/Beverage/Restaurant</option>
							<option value="243" class="opt-specification">Hotel/Tourism</option>
						</optgroup>

						<optgroup label="Manufacturing">
							<option value="244" class="opt-specification">All Manufacturing</option>
							<option value="245" class="opt-specification">Maintenance</option>
							<option value="246" class="opt-specification">Manufacturing</option>
							<option value="247" class="opt-specification">Process Design & Control</option>
							<option value="248" class="opt-specification">Purchasing/Material Management</option>
							<option value="249" class="opt-specification">Quality Assurance</option>
						</optgroup>

						<optgroup label="Sales/Marketing">
							<option value="250" class="opt-specification">All Sales/Marketing</option>
							<option value="251" class="opt-specification">Digital Marketing</option>
							<option value="252" class="opt-specification">E-commerce</option>
							<option value="253" class="opt-specification">Sales-Corporate</option>
							<option value="254" class="opt-specification">Marketing/Business Development</option>
							<option value="255" class="opt-specification">Merchandising</option>
							<option value="256" class="opt-specification">Retail Sales</option>
							<option value="257" class="opt-specification">Sales-Eng/Tech/IT</option>
							<option value="258" class="opt-specification">Sales-Financial Services</option>
							<option value="259" class="opt-specification">Telesales/Telemarketing</option>
						</optgroup>

						<optgroup label="Sciences">
							<option value="260" class="opt-specification">All Sciences</option>
							<option value="261" class="opt-specification">Actuarial/Statistics</option>
							<option value="262" class="opt-specification">Agriculture</option>
							<option value="263" class="opt-specification">Aviation</option>
							<option value="264" class="opt-specification">Biotechnology</option>
							<option value="265" class="opt-specification">Chemistry</option>
							<option value="266" class="opt-specification">Food Technology/Nutritionist</option>
							<option value="267" class="opt-specification">Geology/Geophysics</option>
							<option value="268" class="opt-specification">Science/Technology</option>
						</optgroup>

						<optgroup label="Services">
							<option value="269" class="opt-specification">All Services</option>
							<option value="270" class="opt-specification">Security/Armed Forces</option>
							<option value="271" class="opt-specification">Customer Service</option>
							<option value="272" class="opt-specification">Logistics/Supply Chain</option>
							<option value="273" class="opt-specification">Law/Legal Services</option>
							<option value="274" class="opt-specification">Personal Care</option>
							<option value="275" class="opt-specification">Social Services</option>
							<option value="276" class="opt-specification">Tech & Helpdesk Support</option>
						</optgroup>

						<optgroup label="Others">
							<option value="246" class="opt-specification">All Others</option>
							<option value="247" class="opt-specification">General Work</option>
							<option value="248" class="opt-specification">Journalist/Editors</option>
							<option value="249" class="opt-specification">Publishing</option>
							<option value="250" class="opt-specification">Others</option>
						</optgroup>
					</option>
				</select>
			</div>
		</li>

		<li>
			<div class="form-group " id="qsSalary" name="qsSalary">
				<input class="qsInputSalary form-control" id="salary" autocomplete="off" type="text" value="" placeholder="Minimum Salary(MYR)"/>
			</div>
		</li>

		<li>
			<div class="form-group search-criteria-button " id="qsSeBtn">
				<button class="Search-Button btn btn-default" id="search" value="Search" onclick="#" title="Search Jobs Now"><strong>Search</strong></button>
			</div>
		</li>
      </ul><br>
	 </div>
	</form>
	  </div>

	 <!--sorting-->
	<div class="col-sm-3" style="float:right; width:20px; height:10px;">
		<div class="form-inline">
		<a href="#" title="Change sort order" rel="nofollow"><span class="icon-sorting"></span></a>
		<select class="form-control" id="sort_result" onchange="#">

			<optgroup label="Date">
			<option value="latest-date" selected="selected" class="date">Date (Latest->Oldest)</option>
			<option value="oldest-date" class="date">Date (Oldest->Latest)</option>
			</optgroup>

			<optgroup label="Job Title">
			<option value="asc-job-title" class="job-title">Job Title (A->Z)</option>
			<option value="des-job-title" class="job-title">Job Title (Z->A)</option>
			</optgroup>

			<optgroup label="Company">
			<option value="asc-company" class="company">Company (A->Z)</option>
			<option value="des-company" class="company">Company (Z->A)</option>
			</optgroup>

			<optgroup label="Salary">
			<option value="low-salary" class="salary">Salary (Lowest->Highest)</option>
			<option value="high-salary" class="salary">Salary (Higherst->Lowest)</option>
			</optgroup>

			<optgroup label="Location">
			<option value="asc-location" class="location">Location (A->Z)</option>
			<option value="des-company" class="location">Location (Z->A)</option>
			</optgroup>

			<optgroup label="Job Level">
				<option value="in" class="job-level">Internship</option>
				<option value="fg" class="job-level">Fresh Graduate</option>
				<option value="se" class="job-level">Senior<option>
			</optgroup>
		</select>
	</div>
	</div>

    <div class="col-lg-5 column content">
      <h4><small>JOBS AVAILABLE</small></h4>

      <hr>
	  <div>
		<h3>Job Example</h3>
		<h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
		<h5><span class="label label-primary">Fresh Graduate</span>
		<br><br>
		<p>location</p>
		<p><a href='#' class='w3-button w3-theme ' style="float:right;">See More</a></p>
		<p><a href='#'class='w3-button w3-theme' style="float:right;">Apply</a></p>
	  </div>
    <br>
      <hr>
	  <div>
      <h3>Job Example</h3>
      <h5><span class="glyphicon glyphicon-time"></span> Post by John Doe, Sep 24, 2015.</h5>
      <h5><span class="label label-primary">Internship</span></h5><br>
      <br><br>
	  <p>location</p>
	  <p><a href='#' class='w3-button w3-theme ' style="float:right;">See More</a></p>
		<p><a href='#'class='w3-button w3-theme' style="float:right;">Apply</a></p>
	</div><br><br>
	<hr>
    </div>

	</div>
</div>



  <!-- Pagination -->
  <div class="w3-center w3-padding-32">
    <div class="w3-bar">
      <a class="w3-button w3-black" href="#">1</a>
      <a class="w3-button w3-hover-black" href="#">2</a>
      <a class="w3-button w3-hover-black" href="#">3</a>
      <a class="w3-button w3-hover-black" href="#">4</a>
      <a class="w3-button w3-hover-black" href="#">5</a>
      <a class="w3-button w3-hover-black" href="#">»</a>
    </div>
  </div>

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
