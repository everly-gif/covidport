<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between"">
<div class="container-fluid d-flex justify-content-between">
<div>
<a class="navbar-brand" href="index.html">Covid Project</a></div>
<!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button> -->
<div>
<div>
<div class="navbar-nav">
<li class="nav-item"> <a class="nav-link " aria-current="page" href="#">Home</a></li>
<li class="nav-item"> <a class="nav-link" href="#">Visualizer</a></li>
<li class="nav-item"> <a class="nav-link" href="forum.php">Forum</a></li>
<li class="nav-item"> <a class="nav-link " href="donate.php" >Donate</a></li>
        <!-- <a class="nav-link " href="login.php" >Login</a> -->
        <?php  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
            echo '
                <a class="nav-link " href="login.php">Login</a>';}
            else{echo '<li class="nav-item"> <div class="dropdown"><button class="dropbtn">&#128101;'.$_SESSION['username'].'</button>
              <div class="dropdown-content"><a class="nav-link" href="user-details.php?id='.$_SESSION['user_id'].'">Profile</a><a class="nav-link" href="logout.php">Logout</a></div>
              </div></li>';
                
            }
            ?>
      </div>
</div>
</div>
</div>
</nav>