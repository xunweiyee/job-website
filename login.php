<?php
   include("config.php");
   session_start(); // Starting session
   $error=''; // Variable To Store Error Message
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      if (empty($_POST['username']) || empty($_POST['password'])) {
        $error = "Username or Password is invalid";
      }
      else
      {
        $username=$_POST['username'];
        $password=$_POST['password'];
        // To protect MySQL injection for Security purpose
        $username = stripslashes($username);
        $password = stripslashes($password);
        $myusername = mysqli_real_escape_string($db,$username);
        $mypassword = mysqli_real_escape_string($db,$password);

        $sql = "SELECT id FROM seeker WHERE name = '$myusername' and password = '$mypassword'";
        $result = mysqli_query($db,$sql) or die ('Error in query : $query . ' . mysql_error());
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $active = $row['id'];

        $count = mysqli_num_rows($result);

        // If result matched $myusername and $mypassword, table row must be 1 row

        if($count == 1) {
           $_SESSION['login_user'] = $active;

           header("location: profile.php");
        }else {
           $error = "Username or Password is invalid";


        }
      }
   }
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login page</title>
</head>
<?php require("style.php") ?>

body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 2px;
}
</style>
<body>
  <?php require("navigation.php") ?>
<img class="w3-image w3-opacity-max" style="max-height:100%" src=Login.jpg alt="find job" width="2000" height="500">
<div class="w3-body w3-display-middle w3-card-2 w3-container w3-margin w3-padding-large w3-center">

<h1 class="w3-xxxlarge w3-text-black">User Login</h1>
<h2 class="w3-small">Find jobs matching your requirement</h2>
<br></br>
<form action="<?php echo$_SERVER['PHP_SELF']?>" method="post">
<input type="text" name="username" placeholder="Username">
<br></br>
<input type="password" name="password" placeholder="Password">
<br></br>
<input type="submit" value="Login" class="w3-black">
</form>

<br></br>
<a style="black">New user?</a>
<a href="signup.php" class="w3-text-blue">Sign Up now</a>
</div>
</body>
</html>
