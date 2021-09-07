<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
</head>
<style>

</style>
<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Service Finder</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="DP.php">User Account  <i class="fas fa-user-cog"></i></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="DP.php">Post Job  <i class="fas fa-clipboard-list"></i></a></li>
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </nav> 

    <?php
    $count = 0;
    $newRow = true;
                        $sql = "SELECT * FROM sign_up";
                        $connection = mysqli_connect("localhost", "root", "", "service_finder");
                        $result = mysqli_query($connection, $sql);
                        

                        while ($row = mysqli_fetch_array($result)) {

if ($newRow){
    echo "<div class='container-fluid py-3' >";
    $newRow = false;
}

                           

   echo "<div class='container-fluid py-3' >";
      echo "<div class='row mt-2' >";
         echo "<div class='col-md-4' style='margin-top: 100px;'>";
               echo "<div class='card'>"; 
                  echo "<div class='card-body'>";
                   
                    echo   "<img src='../asset/img/" . $row['image'] . " class='card-img-top' alt='Employee' style='width:200px; heigth: 200px; align-item: center'>"; 
                    echo   "<h2 class='card-title'>" . $row['lname'] . "," . $row['fname'] . "</h2>"; 
                    echo   "<p class='card-text'>" . $row['mname'] . "</p>";
                   "</div>";
                    
               "</div>";
           "</div>"; 
       "</div>";
   "</div>"; 

    ?>
    <?php
    $count++;
    if ($count == 3){
        $newRow = true;
        $count = 0;
    }
                        }
                        ?>


    <div class="container-fluid py-3" >
        <div class="row mt-2" >
            <div class="col-md-4" style="margin-top: 100px;">
                <div class="card">
                    <div class="card-body">
                   
                        <img src="../asset/img/<?php echo $row["image"]; ?>" class="card-img-top" alt="Employee" style="width:200px; heigth: 200px; align-item: center">
                        <h2 class="card-title"><?php echo $row["lname"]; ?>, <?php echo $row["fname"]; ?></h2>
                        <p class="card-text">Description</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.js"></script>
</html>