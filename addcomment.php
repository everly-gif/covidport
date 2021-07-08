<?php
include './partials/db.php';
$table="comments";
if(isset($_POST['displayrecord']) && isset ($_POST['post_id'])){
    
    $post_id=$_POST['post_id'];
    $display=$mysqli->query("SELECT * FROM $table WHERE `post_id` =  '$post_id' AND `parent_id` ='0' ORDER BY `comment_id` DESC ");
   
    if(mysqli_num_rows($display)>0){
    while($data=$display->fetch_assoc())
    {
        echo "<div class='card  reply' >
        <div class='card-header d-flex justify-content-between'>
         <div>". $data['comment_author']." "."says </div> <div>".  $data['date']."</div>
        </div>
        <div class='card-body'>
          <p class='card-text'>". $data['comment']." </p>
          <div style='text-align:right;' >
          <button class='btn rep btn-danger' onclick='reply(this);' >Reply</button>
          </div>
        </div>
      </div><div class='replies'  style='padding-left:48px;' id=".$data['comment_id'].">";
      $parent_id=$data['comment_id'];
      $reply=$mysqli->query("SELECT * FROM $table WHERE `post_id` =  '$post_id' AND `parent_id` ='$parent_id' ORDER BY `comment_id` ASC ");
      if(mysqli_num_rows($reply)>0){
          while($result=$reply->fetch_assoc()){
            echo "<div class='card  reply' id=".$result['comment_id'].">
            <div class='card-header d-flex justify-content-between'>
             <div>". $result['comment_author']." "."replied </div> <div>".  $result['date']."</div>
            </div>
            <div class='card-body'>
              <p class='card-text'>". $result['comment']." </p>
              </div>
              </div>";
          }
      }
      
      
      
      echo "</div>";
  
    }
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
  if (isset($_POST['cont']) && isset($_POST['reply_auth']) && isset($_POST['user_id']) && isset ($_POST['postid']) && isset($_POST['parent_id'])){
    $content=addslashes($_POST['cont']);
    $author=$_POST['reply_auth'];
    $author_id=$_POST['user_id'];
    $date=date('Y-m-d h:i:s');
    $post_id=$_POST['postid'];
    $parent_id=$_POST['parent_id'];
    $query="INSERT INTO $table VALUES('','$content','$author','$author_id','$parent_id','$date','$post_id')";
    $result=$mysqli->query($query);
  
  }


?>
