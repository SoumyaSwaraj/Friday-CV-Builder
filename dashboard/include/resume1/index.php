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
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?php echo $row['name']; ?>'s Resume</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        
    </head>
    <body id="page-top" onload="window.print()">
        <!-- Navigation-->
        <!-- Page Content-->
        <div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content" style="border: 2px dashed black; padding:10px;">
                    <h1 class="mb-0">
                        
                        <span class="text-primary"><?php echo $row['name']; ?></span>
                    </h1>
                    <div class="subheading mb-5">
                        <?php echo $row['mob']; ?> 
                        <a href="mailto:<?php echo $row['email']; ?>"><?php echo $row['email']; ?></a>

                    </div>
                    <p class="lead mb-5"><?php echo $row['about']; ?>
                        <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Gender : <?php echo $row['gender']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Date of Birth : <?php echo $row['dob']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Expected Salary : <?php echo $row['expsalary']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            Mob : <?php echo $row['mob']; ?>
                        </li>
                    </ul>
                    </p>
                    <div class="social-icons">
                        <a class="social-icon" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="#"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content" style="border: 2px solid black; padding:10px;">
                    <h2 class="mb-5">Experience</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row['job1']; ?></h3>
                            <p><?php echo $row['jobd1']; ?></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row['job2']; ?></h3>
                            <p><?php echo $row['jobd2']; ?></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row['job3']; ?></h3>
                            <p><?php echo $row['jobd3']; ?></p>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row['job4']; ?></h3>
                            <p><?php echo $row['jobd4']; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content" style="border: 2px dashed black; padding:10px;">
                    <h2 class="mb-5">Education</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row['e1']; ?></h3>
                            <div><?php echo $row['ed1']; ?></div>
                        </div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0"><?php echo $row['e2']; ?></h3>
                            <div><?php echo $row['ed2']; ?></div>
                        </div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content" style="border: 2px solid black; padding:10px;">
                    <h2 class="mb-5">Skills</h2>
                    
                    <div class="subheading mb-3">Top Skills</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo $row['s1']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo $row['s2']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo $row['s3']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            <?php echo $row['s4']; ?>
                        </li>
                    </ul>
                    <div class="subheading mb-3">Other Relevant</div>
                    <div><?php echo $row['skills']; ?></div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content" style="border: 2px dashed black; padding:10px;">
                    <h2 class="mb-5">Projects</h2>
                    <div class="subheading mb-3"><?php echo $row['p1']; ?></div>
                    <div><?php echo $row['pd1']; ?></div>
                    <div class="subheading mb-3"><?php echo $row['p2']; ?></div>
                    <div><?php echo $row['pd2']; ?></div>
                    <div class="subheading mb-3"><?php echo $row['p3']; ?></div>
                    <div><?php echo $row['pd3']; ?></div>
                    <div class="subheading mb-3"><?php echo $row['p4']; ?></div>
                    <div><?php echo $row['pd4']; ?></div>
                    
                </div>
            </section>
            <hr class="m-0" />
            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content" style="border: 2px solid black; padding:10px;">
                    <h2 class="mb-5">Awards & Certifications</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?php echo $row['a1']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?php echo $row['a2']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?php echo $row['a3']; ?>
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            <?php echo $row['a4']; ?>
                        </li>
                        
                    </ul>
                </div>
            </section>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
<?php
}
}
?>
