<?php
include './partials/db.php';
session_start();
$table="comments";
if(isset($_POST['displayrecord']) && isset ($_POST['post_id'])){
    
    $post_id=$_POST['post_id'];
    $display=$mysqli->query("SELECT * FROM $table WHERE `post_id` =  '$post_id' AND `parent_id` ='0' ORDER BY `comment_id` DESC ");
   
    if(mysqli_num_rows($display)>0){
        echo "<h3 style='margin-top:40px;'>Comments</h3>";
    while($data=$display->fetch_assoc())
    {   
        echo "<div class='card  reply'  >
        <div class='card-header d-flex justify-content-between'>
         <div>". $data['comment_author']." "."says </div> <div>".  $data['date']."</div>
        </div>
        <div class='card-body'>
          <p class='card-text'>". $data['comment']." </p>
          <div style='text-align:right;' >";
         
          if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
              if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$data['author_id']){
                  echo "<button class='btn btn-danger' onclick='deleteComment(".$data['comment_id'].");' style='margin-left:5px;' >Delete</button>";
              }
          }
          echo "</div>
        </div>
      </div>";
      
     
      
      
      
  
    }
   }
   else{
    echo "<p style='margin-top:40px; color:red;'>No comments have been made , Be First</p>";
}

  }
  
  
  if (isset($_POST['content']) && isset($_POST['author']) && isset($_POST['author_id']) && isset ($_POST['post_id'])){
    $content=addslashes($_POST['content']);
    $author=$_POST['author'];
    $author_id=$_POST['author_id'];
    $date=date('Y-m-d h:i:s');
    $post_id=$_POST['post_id'];
    $query="INSERT INTO $table VALUES('','$content','$author','$author_id','0','$date','$post_id')";
    $result=$mysqli->query($query);
  
  }
  
  if(isset($_POST['deleteid'])){
      $comment_id=$_POST['deleteid'];
      $query="DELETE FROM $table WHERE `comment_id`=$comment_id OR `parent_id`= $comment_id";
      $res=$mysqli->query($query);
  }
  
?>