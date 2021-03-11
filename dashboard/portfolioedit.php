<?php
session_start();
include('conn.php');
$con=$GLOBALS['connection'];
if(!isset($_SESSION['user'])){
header('location: login.php');
}
if(!isset($_GET['id'])){
header('location: login.php');
}
include('nav.php');
include('stats.php');
$user=$_SESSION['user'];
$id=$_GET['id'];
$query9999="SELECT * FROM portfolio WHERE id='$id'";
                  $result9999 = mysqli_query($con, $query9999);
                  if(!$result9999){
                      die('Query Failed' . mysqli_error($con));
                  } 
                  $count = mysqli_num_rows($result9999);
                  if($count==1){
                      while($row=mysqli_fetch_assoc($result9999)){
?>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">User Profile</a>
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="assets/img001.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $row['name']; ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="profile.php" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <a href="profile.php" class="dropdown-item">
                <i class="ni ni-settings-gear-65"></i>
                <span>Settings</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="#" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="login.php?acc=logout" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $row['name']; ?></h1>
            <p class="text-white mt-0 mb-5">This is your portfolio page generated under the name : <?php echo $row['tname']; ?>. You can edit and manage your deatils here or on your profile.</p>
            <a href="profile.php" class="btn btn-info">Edit profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="assets/img001.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <span class="heading"><?php echo $GLOBALS['rc']; ?></span>
                      <span class="description">Resumes Created</span>
                    </div>
                    <div>
                      <span class="heading"><?php echo $GLOBALS['pc']; ?></span>
                      <span class="description">Portfolios Hosted</span>
                    </div>
                    <div>
                      <span class="heading">74</span>
                      <span class="description">Views</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3>
                  <?php echo $row['name']; ?><span class="font-weight-light">, 27</span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $row['job1']; ?>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i><?php echo $row['job2']; ?>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i><?php echo $row['e1']; ?>
                </div>
                <hr class="my-4" />
                <p><?php echo $row['about']; ?></p>
                <a href="#">Show more</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Settings</a>
                </div>
              </div>
            </div>
            <div class="card-body">
                <?php if(isset($_SESSION['status'])){
                    ?>
                
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text"><strong><?php echo$_SESSION['status']; ?>!</strong></span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <?php
                unset($_SESSION['status']);
                }
                ?>
              <form action="action.php" method="POST">
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Username</label>
                        <input type="text" name="user" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $row['user']; ?>">
                        <input type="text" name="id" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $_GET['id']; ?>" hidden="1" muted>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" name="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com" value="<?php echo $row['email']; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">Name</label>
                        <input type="text" name="name" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="<?php echo $row['name']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Mobile</label>
                        <input type="text" name="mob" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="<?php echo $row['mob']; ?>">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Relevant information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Education 1</label>
                        <input id="input-address" name="e1" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['e1']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Education 1 Details</label>
                        <input id="input-address" name="ed1" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['ed1']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Education 2</label>
                        <input id="input-address" name="e2" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['e2']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Education 2 Details</label>
                        <input id="input-address" name="ed2" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['ed2']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Skill 1</label>
                        <input type="text" name="s1" id="input-city" class="form-control form-control-alternative" placeholder="skill1" value="<?php echo $row['s1']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Skill 2</label>
                        <input type="text" name="s2" id="input-city" class="form-control form-control-alternative" placeholder="skill2" value="<?php echo $row['s2']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Skill 3</label>
                        <input type="text" name="s3" id="input-city" class="form-control form-control-alternative" placeholder="skill3" value="<?php echo $row['s3']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Skill 4</label>
                        <input type="text" name="s4" id="input-city" class="form-control form-control-alternative" placeholder="skill4" value="<?php echo $row['s4']; ?>">
                      </div>
                    </div>
                    
                    
                  </div>
                  <div class="form-group">
                    <label>Other Skills</label>
                    <textarea rows="4" name="skills" class="form-control form-control-alternative" placeholder="A few more skills about you ..."><?php echo $row['skills']; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Education 2 Details</label>
                        <input id="input-address" name="ed2" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['ed2']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Achievement 1</label>
                        <input type="text" name="a1" id="input-city" class="form-control form-control-alternative" placeholder="skill1" value="<?php echo $row['a1']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Achievement 2</label>
                        <input type="text" name="a2" id="input-city" class="form-control form-control-alternative" placeholder="skill2" value="<?php echo $row['a2']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Achievement 3</label>
                        <input type="text" name="a3" id="input-city" class="form-control form-control-alternative" placeholder="skill3" value="<?php echo $row['a3']; ?>">
                      </div>
                    </div>
                    <div class="col-lg-3">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">Achievement 4</label>
                        <input type="text" name="a4" id="input-city" class="form-control form-control-alternative" placeholder="skill4" value="<?php echo $row['a4']; ?>">
                      </div>
                    </div>
                    
                    
                  </div>
                </div>
                <hr class="my-4" />
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label>About Me</label>
                    <textarea rows="4" name="about" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['about']; ?></textarea>
                  </div>

                </div>

                <h6 class="heading-small text-muted mb-4">Job History</h6>
                <div class="pl-lg-4">
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Job 1</label>
                        <input id="input-address" name="job1" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['job1']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Job Details 1</label>
                    <textarea rows="4" name="jobd1" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['jobd1']; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Job 2</label>
                        <input id="input-address" name="job2" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['job2']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Job Details 2</label>
                    <textarea rows="4" name="jobd2" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['jobd2']; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Job 3</label>
                        <input id="input-address" name="job3" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['job3']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Job Details 3</label>
                    <textarea rows="4" name="jobd3" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['jobd3']; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Job 4</label>
                        <input id="input-address" name="job4" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['job4']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Job Details 4</label>
                    <textarea rows="4" name="jobd4" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['jobd4']; ?></textarea>
                  </div>


                </div>
                <h6 class="heading-small text-muted mb-4">Projects</h6>
                <div class="pl-lg-4">
                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Project 1</label>
                        <input id="input-address" name="p1" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['p1']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Project Details 1</label>
                    <textarea rows="4" name="pd1" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['pd1']; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Project 2</label>
                        <input id="input-address" name="p2" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['p2']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Project Details 2</label>
                    <textarea rows="4" name="pd2" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['pd2']; ?></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Project 3</label>
                        <input id="input-address" name="p3" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['p3']; ?>" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Project Details 3</label>
                    <textarea rows="4" name="pd3" class="form-control form-control-alternative" placeholder="A few words about you ..."><?php echo $row['pd3']; ?></textarea>
                  </div>
                  


                </div>
                <div class="form-group">
                  <input class="form-control btn btn-warning" type="submit" name="pupdatebtn" value="Update Details">
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
<?php
}
}
include('footer.php');
?>     