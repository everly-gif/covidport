
<?php
session_start();
include './partials/db.php';
$table="post";
$alert=false;
$erroralert=false;
if(isset($_POST['submit'])){
    $title=addslashes($_POST['title']);
    $desc=addslashes($_POST['short-desc']);
    $content=$_POST['editor'];
    $date=date('Y-m-d h:i:s');
    $category=$_POST['category'];
    $userid=$_SESSION['user_id'];
    $author=$_SESSION['username'];
    $query=$mysqli->query("INSERT INTO `$table` VALUES ('','$title','$desc','$category','$content','$userid','$author','$date')");
    if($query){
        $alert=true;
    }
    else{
        $erroralert="Something Went Wrong :(";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start a Disucssion</title>
    <script src="./ckeditor/ckeditor.js"></script>
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
<?php include './partials/header.php';
if($alert) {
    
    echo ' <div class="alert alert-success 
        alert-dismissible fade show" role="alert" style="margin-bottom:0px;;border-radius:0px;">

        <strong>Success!</strong> Your discussion is posted! 
        <button type="button" class="close"
            data-dismiss="alert" aria-label="Close"> 
            <span aria-hidden="true">×</span> 
        </button> 
    </div> ';
    
     
   }
   if($erroralert) {
    
    echo ' <div class="alert alert-danger 
        alert-dismissible fade show" role="alert" style="margin-bottom:0px;border-radius:0px;"> 
       <strong>Error!</strong> '. $erroralert.'<button type="button" class="close" 
       data-dismiss="alert" aria-label="Close">
       <span aria-hidden="true">×</span> 
       </button> 
        </div> '; 
   }



?>
<div class="container">
    <form method="post"  style="margin-top:20px;">
    <input type="text" class="form-control" name="title" placeholder="Title of your post" required><br>
    <select name="category" class="form-control" id="category" onchange="checkfor()" required>
    <option disable selected value >Select a Category</option>
    <option value="recovery-stories">Recovery Stories</option>
    <option id="help" value="help">Help</option>
    <option value="help">Discussion</option>
    </select><br>
    <input type="text" id="short-desc" class="form-control" name="short-desc" placeholder="A short description of your post" required><br>
    <textarea id="editor" name="editor" required></textarea><br>
    <input type="submit" class="btn btn-success" name="submit" type="submit">
    </form>
</div>
<?php include './partials/footer.php';?>
<script>
CKEDITOR.replace('editor');
function checkfor() {
        if (document.getElementById("help").selected) {
            
            document.getElementById("short-desc").setAttribute("placeholder", "Enter Place/City");
        } else {
            
            document.getElementById("short-desc").setAttribute("placeholder", "A short description of your post");
            
        }
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>