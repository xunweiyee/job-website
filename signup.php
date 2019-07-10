
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  include("config.php");//make connection here
  $user_name=$_POST['name'];//here getting result from the post array after submitting the form.
  $user_pass=$_POST['password'];//same
  $user_email=$_POST['email'];//same


  if($user_name=='')
  {
      //javascript use for input checking
      echo"<script>alert('Please enter the name')</script>";
  exit();//this use if first is not work then other will not show
  }

  if($user_pass=='')
  {
      echo"<script>alert('Please enter the password')</script>";
  exit();
  }

  if($user_email=='')
  {
      echo"<script>alert('Please enter the email')</script>";
  exit();
  }
  //here query check weather if user already registered so can't register again.
  $check_email_query="select * from seeker WHERE email='$user_email'";
  $run_query=mysqli_query($db,$check_email_query);

  if(mysqli_num_rows($run_query)>0)
  {
  echo "<script>alert('Email $user_email is already exist in our database, Please try another one!')</script>";
  echo"<script>window.open('signup.php','_self')</script>";
  exit();
  }
  //insert the user into the database.
  $insert_user="insert into seeker (name,email,password) VALUE ('$user_name','$user_email','$user_pass')";
  $result = mysqli_query($db,$insert_user);
  if ($result)
   {
   echo"<script>window.open('profile.php','_self')</script>";
   }
}
else{


}?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>Sign Up</title>
</head>
<?php require("style.php"); ?>

<style>
	body {
		font-family: "Times New Roman", Georgia, Serif;
	}

	h1,
	h2,
	h3,
	h4,
	h5,
	h6 {
		font-family: "Roboto";
		letter-spacing: 2px;
	}
</style>



<body>
  <img class="w3-image w3-opacity-max" style="max-height:100%" src=Login.jpg alt="find job" width="2000" height="500">

	<div class="w3-body w3-display-middle w3-card-2 w3-container w3-padding large w3-margin w3-center">
    <h3 class="w3-xxxlarge w3-text-black w3-center">User Sign Up</h3>

    <form action="<?php echo$_SERVER['PHP_SELF']?>" method="post">

      <input class="w3-input w3-border w3-round-large" type="text" name="name" placeholder="Name"><br>
      <input class="w3-input w3-border w3-round-large" type="text" name="email" placeholder="Email"><br>
      <input class="w3-input w3-border w3-round-large" type="password" name="password" placeholder="Password"><br>
      <input class="w3-black w3-container" type="submit" value="signup" class="w3-black w3-container">
    </form>




	</div>

</body>

</html>
