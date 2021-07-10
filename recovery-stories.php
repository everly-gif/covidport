<?php
session_start();
include './partials/db.php';
$table="post";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid Project</title>
    
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
  
<?php include './partials/header.php';?>


<div class="container in-h d-flex justify-content-center">
<a href="forum.php" class="inline-nav ">Discussion</a>
<a href="recovery-stories.php" class="inline-nav in-active ">Recovery Stories</a>
<a href="help.php"class="inline-nav">Help</a>
</div>

<div class="container">
<?php 

$result=$mysqli->query("SELECT * FROM $table WHERE `category`='recovery-stories'");
if(mysqli_num_rows($result)>0){
   while($data=$result->fetch_assoc()){
   echo "<div class='container'>
   <div class='card'>
  <div class='card-header d-flex justify-content-between'>
   <div>". $data['author']." ". "shared". "</div> <div>". $data['date_published']."</div>
  </div>
  <div class='card-body'>
    <h5 class='card-title'>". $data['title']."</h5>
    <p class='card-text'>". $data['short-desc']. "</p>
    <a href='post.php?id=".$data['post_id']."' class='btn  btn-outline-success'>Show Some Love!</a>
  </div>
</div>
   </div>";
   }
}
else{
    echo "<div>There are no posts here! , Be First </div>";
}

?>
</div>

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>