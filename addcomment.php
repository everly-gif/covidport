<?php
include './partials/db.php';
session_start();

$table="comments";

if(isset($_POST['displayrecord']) && isset ($_POST['post_id'])){
    
    $post_id=$_POST['post_id'];
    $display=$mysqli->query("SELECT * FROM $table WHERE `post_id` =  '$post_id' AND `parent_id` ='0' ORDER BY `comment_id` DESC ");
   
    if(mysqli_num_rows($display)>0){
        echo "<h3 style='margin-top:40px;margin-bottom:30px;'>Comments</h3>";
    while($data=$display->fetch_assoc())
    {   
        echo "<div class=' reply'  >
        <div class=' d-flex '>
         <div style='margin-right:10px;'>". $data['comment_author']." "."says </div> <div>".  $data['date']."</div>
        </div><br>
        <div >
          <p >". $data['comment']." </p>
          <div style='text-align:left;' >";
         
          if(isset($_SESSION['loggedin']) || $_SESSION['loggedin']==true){
              if(isset($_SESSION['user_id']) && $_SESSION['user_id']==$data['author_id']){
                  echo "<button class='btn btn-danger' onclick='deleteComment(".$data['comment_id'].");' style='background:none; color:red;margin-bottom:10px;' >Delete</button>";
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
  if(isset($_POST['deletepost'])){
    $post_id=$_POST['deletepost'];
    $query="DELETE FROM `post` WHERE `post_id`=$post_id ";
    $query2="DELETE FROM `comments` WHERE `post_id`=$post_id ";
    $res=$mysqli->query($query);
    $res2=$mysqli->query($query2);
}
?>