<?php
session_start();
include_once('conn.php');
$con=$GLOBALS['connection'];
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
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Portfolio List</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">S.No. & Template ID</th>
                    <th scope="col">Portfolio Name</th>
                    <th scope="col">Template Type</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                	<?php
                	$user=$_SESSION['user'];
                		$query9999="SELECT * FROM portfolio WHERE user='$user'";
			            $result9999 = mysqli_query($con, $query9999);
			            if(!$result9999){
			                die('Query Failed' . mysqli_error());
			            } 
			            $i=0;
			            $count = mysqli_num_rows($result9999);
			            if($count!=0){
			                while($row=mysqli_fetch_assoc($result9999)){
			                	$id++;
                	?>
                  <tr>
                    <th scope="row">
                      <div class="media align-items-center">
                        <a href="#" class="avatar rounded-circle mr-3">
                          <?php echo $id; ?>
                        </a>
                        <div class="media-body">
                          <span class="mb-0 text-sm">ID : <?php echo $row['id']; ?></span>
                        </div>
                      </div>
                    </th>
                    <td>
                      <?php echo $row['tname']; ?>
                    </td>
                    <td>
                      <span class="badge badge-dot mr-4">
                        <i class="bg-success"></i> <?php echo $row['type']; ?>
                      </span>
                    </td>
                    
                    <td class="text-right">
                      <a href="portfolioedit.php?id=<?php echo $row['id']; ?>"><button class="btn text-white bg-gradient-primary">Edit</button></a>
                      <a href="<?php echo $row['link']; ?>"><button class="btn text-white bg-gradient-success">View</button></a>
                    </td>
                  </tr>

                  <?php
              		}
              	}
              		?>
                  
                </tbody>
              </table>
            </div>
            
          </div>
        </div>
      </div>
<?php
include('footer.php');
?>
