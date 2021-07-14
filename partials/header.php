<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-between"">
<div class="container-fluid d-flex justify-content-between">
<div>
<a class="navbar-brand" href="home.php">CovidPort</a><br><div id="google_translate_element"></div></div>

<div>
<div>
<div class="navbar-nav">
<li class="nav-item"></li>
<li class="nav-item"> <a class="nav-link " aria-current="page" href="home.php">Home</a></li>
<li class="nav-item"> <a class="nav-link" href="visualizer.php">Visualizer</a></li>
<li class="nav-item"> <a class="nav-link" href="forum.php">Forum</a></li>
<li class="nav-item"> <a class="nav-link " href="donate.php" >Donate</a></li>
        
        <?php  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
            echo '
                <a class="nav-link " href="login.php">Login</a>';}
            else{echo '<li class="nav-item drop"> <div class="dropdown" ><button class="dropbtn notranslate">'.$_SESSION['username'].'▼</button>
              <div class="dropdown-content"><a class="nav-link" href="user-details.php?id='.$_SESSION['user_id'].'">Profile</a><a class="nav-link" href="start-post.php">Write a Post</a><a class="nav-link" href="logout.php">Logout</a></div>
              </div></li>';
                
            }
            ?>

      </div>
</div>
</div>
</div>
</nav>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
  function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
if ( window.history.replaceState ) {
   window.history.replaceState( null, null, window.location.href );
  }
</script>