<?php
session_start();
include './partials/db.php';?>

<?php

include './partials/header.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/post.css?v=<?php echo time();?>">
</head>
<body>
<?php
  $table="post";
  if(isset($_GET['id']) && $_GET['id']>0){
    $id=mysqli_real_escape_string($mysqli,$_GET['id']);
    $sql= "SELECT `title`,`short-desc`,`content`, `author`, `date_published` FROM $table WHERE `post_id` = $id";
    $result=$mysqli->query($sql);
    if(mysqli_num_rows($result)){
        $data=mysqli_fetch_assoc($result);
        echo '<div class="container">
        <h1>'.$data['title'].'</h1><br>
        <p>'."Posted by ".$data['author']." at ".$data['date_published'].'</p>
        <h6><em><strong>'.$data['short-desc'].'</em></strong></h6><br>
        <div>'.$data['content'].'</div><br>
        </div> ';
    }
  }

?>
<div class="container">
    
    <form>
        <textarea  class="form-control" placeholder="Leave a comment"></textarea>
    </form>
</div>
<?php include './partials/footer.php';?>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>