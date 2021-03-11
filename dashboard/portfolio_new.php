<?php
session_start();
include_once('conn.php');
if(!isset($_SESSION['user'])){
	header('location: login.php');
}
include('nav.php');
include('stats.php');
?>
<div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Dashboard</a>
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
                  <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $_SESSION['name']; ?></span>
                </div>
              </div>
            </a>
            
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
		<div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Friday Users</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $GLOBALS['uc']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 25%</span>
                    <span class="text-nowrap">Since last month</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Your Resume Count</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $GLOBALS['rc']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 18.5%</span>
                    <span class="text-nowrap">Since last week</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Portfolios</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $GLOBALS['pc']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 60%</span>
                    <span class="text-nowrap">Since yesterday</span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-6">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Total Protfolio Views</h5>
                      <span class="h2 font-weight-bold mb-0">36</span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
	   </div>
	</div>

    <div class="container-fluid mt--7">
      <div class="row">
  <?php
  if(isset($_SESSION['updates'])){
    ?>
  <div class="alert alert-default alert-dismissible fade show" role="alert">
    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
    <span class="alert-text"><strong>!!!</strong><?php echo $_SESSION['updates']; ?></span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<?php
unset($_SESSION['updates']);
}
?>
        <div class="card col-sm-12 col-xl-5 mt-2 mb-2 ml-2 mr-2">
          <img class="card-img-top" src="include/elegant.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Elegant Developer</h5>
            <p class="card-text">Select this Template and Instantly Create Beautiful Resume best suited to developers, UI/UX Designers, Cyber Security Expert, Freelancer, etc with One-Click.</p>
            <form action="action.php" method="post">
              <input class="form-control" type="text" name="type" value="elegant" hidden="1">
              <input class="form-control" type="text" name="linkh" value="https://livestats.xyz/friday/dashboard/include/elegant/index.php?id=" hidden="1">
              <input class="form-control" type="text" name="tname" value="" placeholder="Portfolio Identification Name">
              <input class="form-group btn btn-primary" type="submit" name="portfolionewbtn" value="Create Your Portfolio">
            </form>
          </div>
        </div>
        <div class="card col-sm-12 col-xl-5 mt-2 mb-2 ml-2 mr-2">
          <img class="card-img-top" src="include/photo.png" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">Photography</h5>
            <p class="card-text">Select this Template and Instantly Create Beautiful Resume best suited to Photographer, Travelers, Art, Nature Lover, etc with One-Click.</p>
            <form action="action.php" method="post">
              <input class="form-control" type="text" name="type" value="photography" hidden="1">
              <input class="form-control" type="text" name="linkh" value="https://livestats.xyz/friday/dashboard/include/photography/index.php?id=" hidden="1">
              <input class="form-control" type="text" name="tname" value="" placeholder="Portfolio Identification Name">
              <input class="form-group btn btn-primary" type="submit" name="portfolionewbtn" value="Create Your Portfolio">
            </form>
          </div>
        </div>
  <?php
  include('footer.php');
  ?>