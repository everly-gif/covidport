<?php
session_start();
include './partials/db.php';

// if (isset($_POST['cont']) && isset($_POST['reply_auth']) && isset($_POST['user_id']) && isset ($_POST['postid']) && isset($_POST['parent_id'])){
//   $content=addslashes($_POST['cont']);
//   $author=$_POST['reply_auth'];
//   $author_id=$_POST['user_id'];
//   $date=date('Y-m-d h:i:s');
//   $post_id=$_POST['postid'];
//   $parent_id=$_POST['parent_id'];
//   $query="INSERT INTO `comments` VALUES('','$content','$author','$author_id','$parent_id','$date','$post_id')";
//   $result=$mysqli->query($query);
  
// }
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
<div class="big-container">
<div class="container">
<?php
  $table="post";
  if(isset($_GET['id']) && $_GET['id']>0){
    $id=mysqli_real_escape_string($mysqli,$_GET['id']);
    $sql= "SELECT `title`,`short-desc`,`category`,`content`, `author`, `date_published` FROM $table WHERE `post_id` = $id";
    $result=$mysqli->query($sql);
    if(mysqli_num_rows($result)){
        $data=mysqli_fetch_assoc($result);
        echo '
        <h1>'.$data['title'].'</h1><br>
        <p>'."Posted by ".$data['author']." at ".$data['date_published']." in ".'<span style="color:red;">'.$data['category'].'</span></p>
        <h6><em><strong>'.$data['short-desc'].'</em></strong></h6><br>
        <div>'.$data['content'].'</div><br>
        ';
    }
  }

?>
</div> 
<div class="container">
    
    <form method="POST" id="mainform">
        <textarea  class="form-control" id="comment_content" placeholder="Leave a comment"></textarea><br>
        <button class="btn btn-success" type="button" onclick="addComment()" id="submit" name="submit">Post</button>
        
    </form>
    
    
    <div id="display-comment"></div>
</div>

      <div class='card card-body replyRow' style='margin-left:15px; display:none;' id="im">
        <form id="form"> 
        <textarea  class='form-control' id="reply_content" placeholder='Leave a comment'></textarea><br>
        <button type='button' class='btn btn-success' onclick='addReply(this)'>Post</button>
        <button type='button' class='btn btn-danger' onclick='$(".replyRow").hide();'>Close</button>
        </form>
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
 
// function addReply(caller){
//   var cont=$('#reply_content').val();
//   var reply_auth= '<?php echo $_SESSION['username'];?>';
//   var user_id=<?php echo $_SESSION['user_id'];?>;
//   var postid=<?php echo $_GET['id'];?>;
//   var parent_id=$(caller).parent().parent().next().attr("id");
  
//   $.ajax({
     
//      url:"",
//      type:'post',
//      data:{cont:cont,
//      reply_auth:reply_auth,
//      user_id:user_id,
//      postid:postid,
//      parent_id:parent_id
     
     
//      },
//      success:function(data,status){
        
//         document.getElementById("form").reset();
//         displayRecords();
//         location.reload();
//         if(data == 'success')
//          return false;
        
//      },
     

//   });
// }

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


function reply(caller){
  
  $('.replyRow').insertAfter($(caller).parent().parent().parent());
  $('.replyRow').show();
  
  
  
 
}


</script>

</html>