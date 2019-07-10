<html>
  <head>
    <basefont face = "Arial">
  </head>
  <body>
    <?php
      if (!isset($_POST ['search']))
      {
      //form not submitted
      include("job.php");
      }
      else
      {
        //form submitted
        //check the username field



        include("config.php");
        $sql = "SELECT j.title, j.specialisation, j.level, j.location, j.salary, j.timestamp, e.name AS empName FROM job j JOIN employer e ON j.employerID = e.id JOIN company c ON j.companyID = c.id WHERE ";
        $result = mysqli_query($db,$sql);
        if (!$result)
         {
         echo("Error description: " . mysqli_error($db));
         }



        // check if records were returned
        if (mysqli_num_rows ($results) > 0)
        {



        }
        else
        {
          //print error message
          echo 'No result found';
        }
      }
    ?>
  </body>
</html>
