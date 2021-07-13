
<?php
session_start();
include './partials/db.php';
$table="orgs";
$alert=false;
$erroralert=false;

if(isset($_POST['submit'])){
    $org=$mysqli -> real_escape_string(addslashes($_POST['org']));
    $field=$mysqli -> real_escape_string(addslashes($_POST['field']));
    $website=$mysqli -> real_escape_string($_POST['website']);
    $place=$mysqli -> real_escape_string($_POST['place']);
    $query2=$mysqli->query("SELECT * FROM `$table` WHERE `website`='$website'");
    if(mysqli_num_rows($query2)==0){
    $query=$mysqli->query("INSERT INTO `$table` VALUES ('','$org','$field','$website','$place','not approved')");
    if($query){
        $alert=true;
    }
    else{
        $erroralert="Something Went Wrong :(";
    }
  }
    else{
    $erroralert="Org already Submitted ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit an Org</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/forum.css?v=<?php echo time();?>">
</head>
<body>
<?php include './partials/header.php';
if($alert) {
    
    echo ' <div class="alert alert-success 
        alert-dismissible fade show" role="alert" style="margin-bottom:0px;;border-radius:0px;">

        <strong>Success!</strong> Your org is submitted, needs approval from the admin! 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button> 
    </div> ';
    
     
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
<div class="container " style="min-height:350px;">
    <h3 style="margin-top:30px;"> Submit an Org</h3>
    <form method="post"  style="margin-top:40px;">
    <input type="text" class="form-control" name="org" placeholder="Organization's Name" required><br>
    <input type="text"  class="form-control" name="field" placeholder="What field of relief are the providing" required><br>
    <input type="text"  class="form-control" name="website" placeholder="https:// Organization's Website" required><br>
    <input type="text"  class="form-control" name="place" placeholder="Organization's Place" required><br>
    <input type="submit" class="btn btn-success" name="submit" type="submit">
    </form>
</div>
<?php include './partials/footer.php';?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>