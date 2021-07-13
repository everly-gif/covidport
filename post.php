<?php
session_start();
include './partials/db.php';
if(!$_GET['id']){
  header('Location:forum.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/post.css?v=<?php echo time();?>">
</head>
<body>
<?php

include './partials/header.php';

?>
<div class="big-container container">
<div class=" my-5 box-1 container">
<?php
  $table="post";
  if(isset($_GET['id']) && $_GET['id']>0){
    $id=mysqli_real_escape_string($mysqli,$_GET['id']);
    $sql= "SELECT `title`,`short-desc`,`category`,`content`,`user_id`, `author`, `date_published` FROM $table WHERE `post_id` = $id";
    $result=$mysqli->query($sql);
    if(mysqli_num_rows($result)){
        $data=mysqli_fetch_assoc($result);
        echo '<div class="d-flex "><div>
        <h3 style="margin-bottom:30px;">'.stripslashes($data['title']).'</h3></div><br>';
        if(isset($_SESSION['loggedin'])){
          if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$data['user_id']){
            echo '<div><span><button type="button" class="btn btn-danger del " onclick="deletepost('.$id.');">Delete</button></span></div>';
          }
        }
  
     
        echo '</div>
        
        <p>'."Posted by ".$data['author']." at ".$data['date_published']." in ".'<span style="color:red;">'.$data['category'].'</span></p>
        <h6><em><strong>'.stripslashes($data['short-desc']).'</em></strong></h6><br><br>
        <div><div class="post-cont">'.$data['content'].'</div></div><br>
        ';
    }
  }

?>


<div>
    
    <form method="POST" id="mainform">
        <textarea  class="form-control" id="comment_content" placeholder="Leave a comment"></textarea><br>
        <?php  if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
          echo '<a class="btn btn-success" href="login.php" >Login to Comment</a>';
        }
        else{
          echo '<button class="btn btn-success" type="button" onclick="addComment()" id="submit" name="submit">Post</button>';
        }
        ?>
    </form>
    
    
    <div id="display-comment"></div>
  
</div>
</div> 
</div>
<?php include './partials/footer.php';?>

</body>





<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  displayRecords();
  
})
  

function displayRecords(){
var post_id=<?php echo $_GET['id'];?>;
      
          var displayrecord="displayrecord";
          $.ajax({
             url:"addcomment.php",
             type:'post',
             data:{ displayrecord:displayrecord,
             post_id:post_id},
             success:function(data,status){
               $('#display-comment').html(data);
               
             }
          });
        

}



function addComment(){
  var content=$('#comment_content').val();
  var author= '<?php echo $_SESSION['username'];?>';
  var author_id=<?php echo $_SESSION['user_id'];?>;
  var post_id=<?php echo $_GET['id'];?>;
  $.ajax({
     
     url:"addcomment.php",
     type:'post',
     data:{content:content,
     author:author,
     author_id:author_id,
     post_id:post_id
     
     
     
     },
     success:function(data,status){
        document.getElementById("mainform").reset();
        
        displayRecords();
        if(data == 'success')
           return false
     },
     

  });
}
 


function deleteComment(deleteid){
  var con=confirm("Are you sure?");
  if(con==true){
    $.ajax({
      url:"addcomment.php",
      type:"post",
      data:{deleteid:deleteid},
      success:function(data,status){
         displayRecords();
         if(data == 'success')
         return false;
      }
    });
  }
}
function deletepost(deleteid){
  var con=confirm("Are you sure?");
  if(con==true){
    $.ajax({
      url:"addcomment.php",
      type:"post",
      data:{deletepost:deleteid},
      success:function(data,status){
        location.href = "forum.php";
         if(data == 'success')
         return false;
      }
    });
  }
}



function reply(caller){
  
  $('.replyRow').insertAfter($(caller).parent().parent().parent());
  $('.replyRow').show();
  
  
  
 
}


</script>

</html>