<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CovidPort-Visualizer</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.4.1/chart.min.js"></script>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Custom style sheet -->
    <link rel="stylesheet" href="css/forum.css?v=<?php echo time();?>">

    <script src="./src/visualizer.js"></script>
</head>
<body>
    <?php include './partials/header.php';?>
    <div class="container my-5">
        <h2 class="text-center">Covid-19 Visualizer - India Statewise</h2>
    </div>
    <div class="container">
        <div class="d-flex justify-content-between cases mb-5">
            <div><h3 class="text-center" id="active"></h3><p class="text-info text-center font-weight-bold">Active</p></div>
            <div><h3 class="text-center" id="confirmed"></h3><p class="text-warning text-center font-weight-bold">Confirmed</p></div>
            <div><h3 class="text-center" id="recovered"></h3><p class="text-success text-center font-weight-bold">Recovered</p></div>
            <div><h3 class="text-center" id="deaths"></h3><p class="text-danger text-center font-weight-bold">Deaths</p></div>
        </div>
    </div>
    <canvas id="chart" class="m-5"></canvas>
    <div class="container">
        <h3 class="text-danger text-center">Get Vaccinated</h3>
        <p class="text-center"><a target="_blank" href="https://www.cowin.gov.in/">Check slots in CoWIN Portal</a></p>
    </div>
    <?php include './partials/footer.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>