<?php
include './partials/db.php';
$table="comments";
if(isset($_POST['displayrecord']) && isset ($_POST['post_id'])){
    
    $post_id=$_POST['post_id'];
    $display=$mysqli->query("SELECT * FROM $table WHERE `post_id` =  '$post_id' ORDER BY `comment_id` DESC ");
    if(mysqli_num_rows($display)>0){
    while($data=$display->fetch_assoc())
    {
        echo "<div class='card'>
        <div class='card-header d-flex justify-content-between'>
         <div>". $data['comment_author']." "."says </div> <div>".  $data['date']."</div>
        </div>
        <div class='card-body'>
          <p class='card-text'>". $data['comment']." </p>
        </div>
      </div>";

    }
   }
}


if (isset($_POST['content']) && isset($_POST['author']) && isset($_POST['author_id']) && isset ($_POST['post_id'])){
    $content=$_POST['content'];
    $author=$_POST['author'];
    $author_id=$_POST['author_id'];
    $date=date('Y-m-d h:i:s');
    $post_id=$_POST['post_id'];
    $query="INSERT INTO $table VALUES('','$content','$author','$author_id','$date','$post_id')";
    $result=$mysqli->query($query);

}


?>
