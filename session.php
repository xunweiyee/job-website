<?php
   include('config.php');
   session_start();

   $user_check = $_SESSION['login_user'];
   // echo $user_check;

   $ses_sql = mysqli_query($db,"SELECT * FROM seeker WHERE id = '$user_check' ");
   if (!$ses_sql)
    {
    echo("Error description: " . mysqli_error($db));
    }

   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);

   $login_session = $row['id'];
   // echo $login_session;

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
