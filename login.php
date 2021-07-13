<?php
include './partials/db.php';
$table='users';
$alert=false;
$erroralert=false;

if(isset($_POST['submit'])){
    $email=$mysqli -> real_escape_string($_POST['email']);
    $password=$mysqli -> real_escape_string($_POST['password']);
    $result=$mysqli->query("SELECT * FROM $table WHERE `email`='$email'");
    $details=$mysqli->query("SELECT `name`,mobile_no FROM $table WHERE email='$email'");
    $id=$mysqli->query("SELECT id FROM $table WHERE email='$email'");
    if(mysqli_num_rows($result) == 1){
      $d=mysqli_fetch_assoc($result);
      $verify=password_verify($password,$d['password']);
      if($verify){
      $data=mysqli_fetch_assoc($details);
      $ID=mysqli_fetch_assoc($id);
      session_start();
      $_SESSION['loggedin']=true;
      $_SESSION['email']=$email;
      $_SESSION['mobile']=$data['mobile_no'];
      $_SESSION['username']=$data['name'];
      $_SESSION['user_id'] = $ID['id'];
      $alert=true;
      }
      else{
        $erroralert="Wrong Credentials, try again!";
      }

    }
    else{
        $erroralert="Account doesn't exist, sign up!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

      <!-- Bootstrap -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

        <!-- Custom style sheet -->
        <link rel="stylesheet" href="css/login.css?v=<?php echo time();?>">
</head>
<body>
<?php

include './partials/header.php';

?>
<?php if($alert) {
    
    echo ' <div class="alert alert-success 
        alert-dismissible fade show" role="alert" style="margin:0px;;border-radius:0px;">
        <strong>Success!</strong>  
         You are now logged in! 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button> 
    </div> ';
     echo '<meta http-equiv="refresh" content="2;url=forum.php" />';
     
   }
   if($erroralert) {
    
    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert" style="margin:0px;border-radius:0px;"> 
       <strong>Error!</strong> '. $erroralert.'<button type="button" class="close" 
       data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">×</span> 
       </button> 
        </div> '; 
   }


?>
<div class="container ">
    <h3 class="text-center my-4">Together, we are stronger</h3>
    <div class="d-flex flex-column justify-content-center align-items-center">
    <form class="form" method="POST">
    <h4 class="m-2">Login</h4>
    
    <input type="email" class="form-control m-2" placeholder="Enter email" id="email" name="email" required>
    <input type="password" class="form-control m-2" placeholder="Enter Password" id="password" name="password" required>
    <button class="btn btn-success m-2" name="submit">Login</button><br><br>
    <h5 class="m-2 text-center "> Don't have an account?</h5>
    <p style="text-align:center;"><a class="m-2 text-center" href="sign-up.php">Sign Up</a></p>
    </form>
    </div>
</div>

<?php include './partials/footer.php';?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>