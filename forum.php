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
<a href="forum.php" class="inline-nav in-active">Discussion</a>
<a href="recovery-stories.php" class="inline-nav ">Recovery Stories</a>
<a href="help.php"class="inline-nav">Help</a>
</div>
<div class="container jumbo">
<h4 class=" m-1"> Can't find what you are looking for? <br></h4> <h4 class=" m-1">Start a discussion</h4><br>
<!-- <input type="text" class="form-control m-2" placeholder="Title" aria-label="Discussion">
<input type="text" class="form-control m-2" placeholder="Short Description" aria-label="Discussion">
<textarea class="form-control m-2" placeholder="Start your discussion" ></textarea> -->
<a class="btn btn-success " href="start-post.php" type="submit">Start a discussion</a>
</div>

<div class="container search-bar">
    <form style="margin-top:30px; " method="POST" class="d-flex">
        <input type="search" name="search" class="form-control" placeholder="Search discussion" aria-label="Search">
        <button class="btn btn-outline-success search"  type="submit" name="submit" >Search</button>
       
    </form>
</div>

<?php
?>

<div class="container thread-list">

<div class="search-results">

<?php if(isset($_POST['submit']) && !empty($_POST['search'])){
$str=mysqli_real_escape_string($mysqli,$_POST['search']);
$result=$mysqli->query(" SELECT * FROM $table where (`title` like ('%$str%') OR `short-desc` like ('%$str%')) AND `category`='discussion'") ;
if(mysqli_num_rows($result)==0){
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Looks Like there's not a lot of discussions, start your own! </h5>";
  $result=$mysqli -> query("SELECT * FROM $table WHERE `category`='discussion' ORDER BY `post_id` DESC ") or die($mysqli->error);
}
else{
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Search Results </h5>";
}
}
else{
  echo "<h5 class='container'style='padding:0px; margin:30px 0px;'>Recently added </h5>";
  $result=$mysqli -> query("SELECT * FROM $table WHERE `category`='discussion' ORDER BY `post_id` DESC ") or die($mysqli->error);
 }
 if(mysqli_num_rows($result)>0){
 while($data=$result->fetch_assoc()){
         
  $queries[]=$data;
}
 foreach($queries as $searchresults) : ?>
<div class="card">
  <div class="card-header d-flex justify-content-between">
   <div><?php echo $searchresults['author']." ". "asks"; ?></div> <div><?php echo $searchresults['date_published'];?></div>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $searchresults['title'];?></h5>
    <p class="card-text"><?php echo $searchresults['short-desc'];?> </p>
    <a href="post.php?id=<?php echo $searchresults['post_id'];?>" class="btn  btn-outline-success">Join the discussion</a>
  </div>
</div>
<?php endforeach;}
else{
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Looks Like there's not a lot of discussions, start your own! </h5>";
}
?>






</div>
</div>

<?php include './partials/footer.php';?>
<script>if ( window.history.replaceState ) {
   window.history.replaceState( null, null, window.location.href );
  }
</script>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>