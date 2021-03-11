<?php
$id=$_GET['id'];
include('conn.php');
$con=$GLOBALS['connection'];
$query9999="SELECT * FROM resume WHERE id='$id'";
                  $result9999 = mysqli_query($con, $query9999);
                  if(!$result9999){
                      die('Query Failed' . mysqli_error($con));
                  } 
                  $count = mysqli_num_rows($result9999);
                  if($count==1){
                      while($row=mysqli_fetch_assoc($result9999)){

?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo $row['name']; ?>'s Resume</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-frontpage.css" rel="stylesheet">

</head>

<body onload="window.print()" style="padding-top: 0;">

  <!-- Navigation -->

  <!-- Header -->
  <header class="bg-primary py-5 mb-5">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
          <h1 class="display-4 text-white mt-5 mb-2"><?php echo $row['name']; ?></h1>
          <p class="lead mb-5 text-white"><?php echo $row['about']; ?></p>
        </div>
      </div>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <div class="row">
      <div class="col-md-8 mb-5">
        <h2>Education</h2>
        <hr>
        <p><h3><b><?php echo $row['e1']; ?></b></h3></p>
        <p><?php echo $row['ed1']; ?></p><br>
        <p><h3><b><?php echo $row['e2']; ?></b></h3></p>
        <p><?php echo $row['ed2']; ?></p><br>
      </div>
      <div class="col-md-4 mb-5">
        <h2>Personal Details</h2>
        <hr>
        <address>
          Gender : <strong><?php echo $row['gender']; ?></strong>
          <br>DOB :<?php echo $row['dob']; ?>
          <br>Exp. Salary : <?php echo $row['expsalary']; ?>
          <br>
        </address>
        <address>
          <abbr title="Phone">Mob:</abbr>
          <?php echo $row['mob']; ?>
          <br>
          <abbr title="Email">Email:</abbr>
          <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>
        </address>
      </div>
    </div>
    <!-- /.row -->

    <div class="row">
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="ed1.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Skills</h4>
            <p class="card-text">Top Skills<br><ul>
              <li><?php echo $row['s1']; ?></li>
              <li><?php echo $row['s2']; ?></li>
              <li><?php echo $row['s3']; ?></li>
              <li><?php echo $row['s4']; ?></li>
            </ul><br>
            <p>Other Relevant Skills <?php echo $row['skills']; ?></p></p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="ed2.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Achievements</h4>
            <p class="card-text">Top 4<br><ul>
              <li><?php echo $row['a1']; ?></li>
              <li><?php echo $row['a2']; ?></li>
              <li><?php echo $row['a3']; ?></li>
              <li><?php echo $row['a4']; ?></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card h-100">
          <img class="card-img-top" src="ed3.png" alt="">
          <div class="card-body">
            <h4 class="card-title">Job History</h4>
            <p class="card-text">Last 4 Jobs<br><ul>
              <li><?php echo $row['job1']; ?></li>
              <li><?php echo $row['job2']; ?></li>
              <li><?php echo $row['job3']; ?></li>
              <li><?php echo $row['job4']; ?></li>
            </ul>
          </div>
          
        </div>
      </div>
    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
 
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
<?php
}
}
?>