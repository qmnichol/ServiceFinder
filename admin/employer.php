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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="employee.php">Employee</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="employer.php">Employer</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </nav> 

    <div class="container-fluid" style="margin-top: 100px;margin-bottom: 20px;" >
        <div class="row">
            <div class="col-12 col-sm-12 col-md-8 offset-md-2">
                <?php
                if (isset($_POST["create_submit"])) {
                    $username = $_POST["username"];
                    $password = $_POST["password"];
                    $Email = $_POST["Email"];
                    $cnum = $_POST["cnum"];
                    $address = $_POST["address"];


                    $connection = mysqli_connect("localhost", "root", "", "service_finder");
                    $sql = "INSERT INTO sign_up(username, Email, cnum, address, password) VALUES('$username','$Email', '$cnum', '$address', '$password')";
                    if (mysqli_query($connection, $sql)) {
                        ?>
                        <div class="alert alert-success">
                            <b>Success</b>
                        </div>
                <?php
                    }
                }
                ?>
                <table class="table table-bordered table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Email</th>
                            <th>Contact Number</th>
                            <th>Address</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT * FROM sign_up";
                        $connection = mysqli_connect("localhost", "root", "", "service_finder");
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td class="gradient"><?php echo $row["username"];?></td>
                                <td class="gradient"  type="password"><?php echo $row["password"]; ?></td> <!-- style="background: radial-gradient(circle, rgba(238,174,202,1) 0%, rgba(148,187,233,1) 100%);" -->
                                <td class="gradient"><?php echo $row["Email"]; ?></td>
                                <td class="gradient"><?php echo $row["cnum"]; ?></td>
                                <td class="gradient"><?php echo $row["address"]; ?></td>
                                <td>
                                    <a href="<?php echo "update.php?id=" . $row["id"];  ?>" class="btn-lg btn-primary" target="_blank" style="text-decoration: none;">Update</a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.js"></script>
</html>