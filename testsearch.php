<html>
<head>
<title>Search Criteria Process</title>
</head>

<body>
<?php
	  if(isset($_POST['search']))
	  {
		  $key = $_POST['key'];
		  $location = $_POST['location'];
		  $specification = $_POST['specification'];
		  $minsal = $_POST['minsal'];

			// echo $key;
			// echo $location;
			// echo $specification;
			// echo $minsal;
			// echo "<br>";

			$sql = "SELECT j.title, j.specialisation, j.level, j.location, j.salary, j.timestamp, e.name AS empName FROM job j JOIN employer e ON j.employerID = e.id JOIN company c ON j.companyID = c.id";

			if (((($key) || ($location) || ($specification) || ($minsal)))) {
				$sql = $sql . ' WHERE ';
			}
			if ($key) {
			    $sql = $sql . 'j.title LIKE ' . "'%" . $key . "%'";
					if (((($location) || ($specification) || ($minsal)))) {
						$sql = $sql . ' AND ';
					}
			}

			if ($location) {
					$sql = $sql . 'j.location = ' . "'" . $location . "'";
					if (((($specification) || ($minsal)))) {
						$sql = $sql . ' AND ';
					}
			}

			if ($specification) {
					$sql = $sql . 'j.specification = ' . "'" . $specification . "'";
					if (((($minsal)))) {
						$sql = $sql . ' AND ';
					}
			}

			if (((($minsal)))) {
				$sql = $sql . 'j.salary >= ' . $minsal;
			}

			echo $sql;


		  //search in all table columns
		  //using concat mysql function

	  }
?>

</body>
</html>
