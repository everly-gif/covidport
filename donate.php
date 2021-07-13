<?php session_start();
include './partials/db.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/forum.css?v=<?php echo time();?>">
</head>
<body>
<?php include './partials/header.php';?>
<div class="container" style="margin-top:40px;">
    <h4 style="text-align:center;">Donate or Volunteer to Organizations that are providing COVID-19 Relief</h4><br>
    <h6  style="text-align:center;"><a href="submit-org.php" style="text-align:center;color:green;">Submit an Org</a></h6>
    <div class="container search-bar">
    <form style="margin-top:30px; " method="POST" class="d-flex">
        <input type="search" name="search" id="search" class="form-control" placeholder="Search by place , org or field of relief" aria-label="Search">
        <button class="btn btn-success search"  type="submit" name="submit" >Search</button>
       
    </form>
</div>
<div class="container thread-list">

<div class="search-results">
<?php $table='orgs';

if(isset($_POST['submit']) && !empty($_POST['search'])){
$str=mysqli_real_escape_string($mysqli,$_POST['search']);
$result=$mysqli->query(" SELECT * FROM $table where (`org` like ('%$str%') OR `field` like ('%$str%') OR `place` like ('%$str%')) AND `status`='approved'") ;
if(mysqli_num_rows($result)==0){
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Looks Like there's no result for your search , <a href='submit-org.php'>Submit this org!</a></h5>";
  $result=$mysqli -> query("SELECT * FROM $table WHERE `status`='approved' ORDER BY `id` DESC ") or die($mysqli->error);
}
else{
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Search Results </h5>";
}
}
else{
  echo "<h5 class='container'style='padding:0px; margin:30px 0px;'>Recently added </h5>";
  $result=$mysqli -> query("SELECT * FROM $table WHERE `status`='approved' ORDER BY `id` DESC ") or die($mysqli->error);
 }
 if(mysqli_num_rows($result)>0){
 while($data=$result->fetch_assoc()){
         
  $queries[]=$data;
}
 foreach($queries as $searchresults) : ?>
<div class="card">
  <div class="card-header ">
   <div><?php echo $searchresults['place'];?></div>
  </div>
  <div class="card-body">
    <h5 class="card-title"><?php echo $searchresults['org'];?></h5>
    <p class="card-text"><?php echo $searchresults['field'];?> </p>
    <div style="text-align:right;">
    <a href="<?php echo $searchresults['website'];?>" target="_blank" class="btn  btn-success">Visit Website</a></div>
  </div>
</div>
<?php endforeach;}
else{
  echo "<h5 class='container' style='padding:0px; margin:30px 0px;'>Looks Like there's no result for your search , <a href='submit-org.php'>Submit this org!</a></h5>";
}
?>
 
</div>
</div>
</div>
<?php include './partials/footer.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>