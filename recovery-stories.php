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
<div class="d-flex justify-content-between">
<div class="cont-1">

<div class="container main">
<p style="text-align:center;margin-bottom:20px;color:#2C2E43;">Latest In Disucssions</p>
<?php

$query="SELECT * FROM `post` WHERE `category`='discussion'";
$result=$mysqli->query($query);
while($data=$result->fetch_assoc()){
  echo '<div class="container"><p style="margin-bottom:0;color:orangered;font-size:15px;">'.$data['author'].' shared </p>';
  echo '<p style="margin-bottom:2px;" ><a class="link" href="post.php?id='.$data['post_id'].'">'.$data['title'].' </a></p></div><br>';
}

?>
</div>

</div>
<div class="cont-2">

<div class="container search-bar">
    <form style="margin-top:30px; " method="POST" class="d-flex">
        <input type="search" name="search" class="form-control" placeholder="Search Stories" aria-label="Search">
        <button class="btn btn-success search  " type="submit" name="submit" >Search</button>
       
    </form>
</div>


<div class="container in-h d-flex justify-content-center">
<a href="forum.php" class="inline-nav ">Discussion</a>
<a href="recovery-stories.php" class="inline-nav in-active ">Recovery Stories</a>
<a href="help.php"class="inline-nav">Help</a>
</div>

<div class="container">



<div class="container thread-list">

<div class="search-results">

<?php if(isset($_POST['submit']) && !empty($_POST['search'])){
$str=mysqli_real_escape_string($mysqli,$_POST['search']);
$result=$mysqli->query(" SELECT * FROM $table where (`title` like ('%$str%') OR `short-desc` like ('%$str%')) AND `category`='recovery-stories'") ;
if(mysqli_num_rows($result)==0){
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Looks Like there's not a lot of discussions , <a href='start-post.php'>start your own!</a></h5>";
  $result=$mysqli -> query("SELECT * FROM $table WHERE `category`='recovery-stories' ORDER BY `post_id` DESC ") or die($mysqli->error);
}
else{
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Search Results </h5>";
}
}
else{
  echo "<h5 class='container'style='padding:0px; margin:30px 0px;'>Recently added </h5>";
  $result=$mysqli -> query("SELECT * FROM $table WHERE `category`='recovery-stories' ORDER BY `post_id` DESC ") or die($mysqli->error);
 }
 if(mysqli_num_rows($result)>0){
 while($data=$result->fetch_assoc()){
         
  $queries[]=$data;
}
 foreach($queries as $searchresults) : ?>
<div class="card">
  <div class="card-header d-flex justify-content-between">
   <div><?php echo $searchresults['author']." ". "shared"; ?></div> <div><?php echo $searchresults['date_published'];?></div>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo stripslashes($searchresults['title']);?></h5>
    <p class="card-text"><?php echo stripslashes($searchresults['short-desc']);?> </p>
    <div class="left">
    <a href="post.php?id=<?php echo $searchresults['post_id'];?>" class="btn  btn-success click">Show Some Love!</a>
    </div>
  </div>
</div>
<?php endforeach;}
else{
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Looks Like there's not a lot of discussions , <a href='start-post.php'> start your own!</a> </h5>";
}
?>
</div>
</div>
</div>
</div>
<div class="cont-3">
<div class="container  main">
<p style="text-align:center;margin-bottom:20px;color:#2C2E43;">Latest In Help</p>
<?php

$query="SELECT * FROM `post` WHERE `category`='help'";
$result=$mysqli->query($query);
while($data=$result->fetch_assoc()){
  echo '<div class="container"><p  style="margin-bottom:0;color:orangered;font-size:15px;">'.$data['author'].' needs help </p>';
  echo '<p style="margin-bottom:2px;" ><a class="link" href="post.php?id='.$data['post_id'].'">'.$data['title'].' </a></p></div><br>';
}

?>
</div>
</div>
</div>
<?php include './partials/footer.php'?>

</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>