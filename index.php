<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Finder</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="asset/fontawesome/css/all.min.css">
   <link rel="stylesheet" href="asset/css/adminlte.min.css">
   <link rel="stylesheet" href="asset/css/style.css">
   <link rel="stylesheet" href="asset/tables/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="index.php">Service Finder</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Explore</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="login.php">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="signup.php">Sign up</a></li>
                    <li class="nav-item">
                        <a class="nav-link" href="adminlogin.php" role="button">
                            <i class="fas fa-user-lock"></i>
                        </a>
                    </li>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <a class="btn ml-auto" role="button" href="login.php" style="background: rgb(116, 156, 143);color:#fff">Post a Job</a></div>
                </ul>
            </div>
        </div>
    </nav>
    <header class="masthead text-white text-center" style="background: rgb(88, 117, 108);
    background: linear-gradient(90deg, rgba(78,201,163,1) 0%, rgba(87,214,172,1) 35%, rgba(144,212,226,1) 100%);height: 500px;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto" style="margin-top:200px">
                    <h1 class="mb-5">Find &amp; Explore best service provider near you.</h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">
                            <div class="col-12 col-md-9 mb-2 mb-md-0"><input class="form-control form-control-lg" type="email" placeholder="What service do you need?"></div>
                            <div class="col-12 col-md-3"><button class="btn btn-primary btn-block btn-lg" type="submits">Search</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header><section class="portfolio-block projects-cards">


        <!-- <div class="container">
            <div class="heading">
                <h2>Recent Projects</h2>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image1.jpg" alt="Card Image"></a>
                        <div class="card-body">
                            <h6><a href="#">Lorem Ipsum</a></h6>
                            <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image2.jpg" alt="Card Image"></a>
                        <div class="card-body">
                            <h6><a href="#">Lorem Ipsum</a></h6>
                            <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image3.jpg" alt="Card Image"></a>
                        <div class="card-body">
                            <h6><a href="#">Lorem Ipsum</a></h6>
                            <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image4.jpg" alt="Card Image"></a>
                        <div class="card-body">
                            <h6><a href="#">Lorem Ipsum</a></h6>
                            <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image5.jpg" alt="Card Image"></a>
                        <div class="card-body">
                            <h6><a href="#">Lorem Ipsum</a></h6>
                            <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card border-0"><a href="#"><img class="card-img-top scale-on-hover" src="assets/img/nature/image6.jpg" alt="Card Image"></a>
                        <div class="card-body">
                            <h6><a href="#">Lorem Ipsum</a></h6>
                            <p class="text-muted card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quam urna.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <main class="page lanidng-page"> -->
 
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>Services</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Web Design</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Interface Design</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Photography and Print</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>

<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/theme.js"></script>
</body>
</html>