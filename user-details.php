<?php
session_start();
include './partials/db.php';
if(!isset($_SESSION['username']) && ($_SESSION['user_id'] != true))
{
     header("Location:forum.php"); //Do not allow  access.
     exit;}

if(isset($_POST['deleteacc'])){
    $user_id=$_POST['deleteacc'];
    $query="DELETE FROM `post` WHERE `user_id`=$user_id ";
    $query2="DELETE FROM `comments` WHERE `author_id`=$user_id ";
    $query3="DELETE FROM `users` WHERE `id`=$user_id ";
    $res=$mysqli->query($query);
    $res2=$mysqli->query($query2);
    $res3=$mysqli->query($query3);
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/user.css?v=<?php echo time();?>">
</head>
<body>

<?php include './partials/header.php';?>
<div class="container d-flex justify-content-between main">
<div>
<h3>Posts</h3>
<?php 
$id=$_SESSION['user_id'];
$query="SELECT * FROM `post` WHERE `user_id` = $id";
$result=$mysqli->query($query);
if(mysqli_num_rows($result)>0){
while($data=$result->fetch_assoc()){
    echo '<p><a href="post.php?id='.$data['post_id'].'">'.$data['title'].'</a> in ' .$data['category'].'</p>';
}
}
else{
    echo '<p>No Posts have been Made.</p>';
}
?>
</div>
<div>
<h3>Comments</h3>
<?php 
$id=$_SESSION['user_id'];
$query="SELECT * FROM `comments` WHERE `author_id` = $id";
$result=$mysqli->query($query);
if(mysqli_num_rows($result)>0){
while($data=$result->fetch_assoc()){
    echo '<p><a href="post.php?id='.$data['post_id'].'">'.$data['comment'].'</a></p>';
}
}
else{
    echo '<p>No comments have been Made.</p>';
}
?>
</div>
<div>
<h3>Details</h3>
<?php 
$id=$_SESSION['user_id'];
$query="SELECT * FROM `users` WHERE `id` = $id";
$result=$mysqli->query($query);
if(mysqli_num_rows($result)>0){
while($data=$result->fetch_assoc()){
    echo '<p>Name : '.$data['name'].'</p>';
    echo '<p>Email : '.$data['email'].'</p>';
    echo '<p>Mobile No : '.$data['mobile_no'].'</p>';
    echo '<button type="button" class="btn btn-danger" onclick="deleteacc('.$id.')">Delete Account</button>';
}
}
else{
    echo '<p>No comments have been Made.</p>';
}
?>
</div>
</div>
<?php include './partials/footer.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    function deleteacc(deleteid){
  var con=confirm("Are you sure? All your data will be deleted");
  if(con==true){
    $.ajax({
      url:"",
      type:"post",
      data:{deleteacc:deleteid},
      success:function(data,status){
        location.href = "login.php";
         if(data == 'success')
         return false;
      }
    });
  }
}
</script>
</body>
</html>