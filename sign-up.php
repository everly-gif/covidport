<?php
include './partials/db.php';
$table='users';
$alert=false;
$erroralert=false;
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($mysqli,$_POST['name']);
    $email=mysqli_real_escape_string($mysqli,$_POST['email']);
    $password=mysqli_real_escape_string($mysqli,$_POST['password']);
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $mobile=mysqli_real_escape_string($mysqli,$_POST['mobile']);
    $unique=$mysqli->query("SELECT `email`, `mobile_no` FROM $table WHERE `email`='$email' OR `mobile_no` = '$mobile' ");
    if(mysqli_num_rows($unique)==0){
        $query=$mysqli->query("INSERT INTO $table VALUES('','$name','$email','$hash','$mobile')");
        if($query){
            $alert=true;
        }
        else{
            $erroralert="Something Went Wrong :(";
        }
    }
    else{
        $erroralert="This email id or mobile number is already registered.";
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
        alert-dismissible fade show" role="alert" style="margin-bottom:0px;;border-radius:0px;">

        <strong>Success!</strong> Your account is 
        now created and you can login. 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button> 
    </div> ';
    echo '<meta http-equiv="refresh" content="2;url=login.php" />';
     
   }
   if($erroralert) {
    
    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert" style="margin-bottom:0px;border-radius:0px;"> 
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
    <h4 class="m-2">Sign Up</h4>
   
    <input type="text" class="form-control m-2" placeholder="Enter Name" id="name" name="name" required>
    <input type="email" class="form-control m-2" placeholder="Enter email" id="email" name="email" required>
    <input type="password" class="form-control m-2" placeholder="Enter Password" id="password" name="password" required>
    <input type="tel" class="form-control m-2" pattern="[0-9]{10}" placeholder="Enter mobile number" id="mn" name="mobile" required>
    
    <button class="btn btn-success m-2 " name="submit">Sign up</button>
    <h5 class="m-2 text-center "> Already have an account?</h5>
    <p style="text-align:center;"><a class="m-2 text-center" href="login.php">Login</a></p>
    </form>
</div>
</div>

<?php include './partials/footer.php';?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>















