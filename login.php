<?php
session_start();

if (isset($_SESSION["username"])) {
    header("Location: user/index.php");
}

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $connection = mysqli_connect("localhost", "root", "", "service_finder");

    $sql = "SELECT * FROM sign_up WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($connection, $sql);
    if ($row = mysqli_fetch_array($result)) {
        $_SESSION["username"] = $username;

        header("Location: user/index.php");
    } else {
        $msg = "error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
</head>
<style>
 
</style>
<body>
    <!-- <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Service Finder</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.php">Explore</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">Sign up</a></li>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <a class="btn ml-auto" role="button" href="post-job.html" style="background: rgb(78,201,163);color:#fff">Post a Job</a></div>
                </ul>
            </div>
        </div>
    </nav>  -->
    <div class="login-box" style="width: 30%;margin-left: 35%;margin-top: 100px;margin-bottom: 20px;">
        <div class="card card-outline card-success">
                <div class="X" >
                    <li class="nav" style="float: right; padding-right:10px"><a href="index.php"><span class="fa fa-times" style="color: black;"></span></a></li>
                </div>
                        <!-- lowgow -->
            <div class="card-header text-center">
              <a href="index.php" class="brand-link">
              <img src="asset/img/logo.png" alt="Service Finder Logo" width="200">
              </a>
           </div>
           <?php
                if (isset($msg)) {
                    ?>
                    <div class="alert alert-danger">
                        <b>Error!</b> Invalid Username and Password, Please enter the correct password
                    </div>
                <?php
                }
                ?>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                        <!-- cardow -->
            <div class="card-body">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="username" name="username" required="require">
                    <div class="input-group-append">
                       <div class="input-group-text">
                          <span class="fas fa-user"></span>
                       </div>
                    </div>
                 </div>
                 <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="password" name="password" required="require">
                    <div class="input-group-append">
                       <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                       </div>
                    </div>
                 </div>
                 <div class="row">
                    <div class="col-6 offset-3">
                        <input type="submit" class="btn btn-block" value="Login" name="submit" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">
                    </div>
                 </div>

            </div>

        </div>
    </div> 
</body>
<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.js"></script>
</html>