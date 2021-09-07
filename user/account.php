<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../asset/fontawesome/css/all.min.css">
</head>
<style>
   .img-placeholder {
  width: 60%;
  color: white;
  height: 100%;
  background: black;
  opacity: .7;
  height:200px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  display: none;
  
}
.img-placeholder h4 {
  margin-top: 40%;
  color: white;
}
.img-div:hover .img-placeholder {
  display: block;
  cursor: pointer;
}
</style>    
<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="index.php">Service Finder</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <div class="collapse navbar-collapse" id="navcol-1">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="DP.php">Display Photo  <i class="fas fa-camera-retro"></i></a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="login-box" style="margin-top: 100px;">
        <!-- /.login-logo -->
           <section class="content">
              <div class="container-fluid">
                 <div class="card">
                    <div class="card-header" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">
                       <h3 class="card-title">Sign Up</h3>
                    </div>
                    <!-- /.card-header -->
                    
                    <!-- form start -->
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                             
                    <div class="col-md-12" >          
                          <div class="row">

                             <!---------------------------- Profile Picture -->
                             <div class="col-md-3">
                                 <div class="form-group text-center" style="position: relative;">
                                       <span class="img-div">
                                       <div class="text-center img-placeholder"  onClick="triggerClick()">
                                             <h4>Upload image</h4>
                                       </div>
                                       <img src="../asset/img/beard.png" onClick="triggerClick()" id="profileDisplay" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                                    </span>
                                    <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
                                    <p>Please Attach Photo</p>
                                 </div>
                             </div>

                             

                           <!----------------- profile information  -->
                             <div class="col-md-9">
                                <div class="card-header">
                                   <span class="fa fa-user"> Profile Information</span>
                                </div>

                                <div class="row">

                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <label for="">First Name</label>
                                         <input type="text" class="form-control" name="fname" placeholder="first name" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <label for="">Middle Name</label>
                                         <input type="text" class="form-control" name="mname" placeholder="middle name" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <label for="">Last Name</label>
                                         <input type="text" class="form-control" name="lname" placeholder="last name" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-2">
                                      <div class="form-group">
                                         <label for="">Gender</label>
                                         
                                         <div class="form-control">
                                             <input type="radio" name="Gender" value="Male" /> Male                                                                                     
                                             <input type="radio" name="Gender" value="Female"/> Female
                                         </div>
                                          
                                      </div>
                                   </div>

                                   <div class="col-sm-2">
                                      <div class="form-group">
                                         <label for="">Age</label>
                                         <input type="text" class="form-control" name="age" placeholder="Age" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <label for="">Birthday</label>
                                         <input type="date" class="form-control" name="bdate" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-4">
                                      <div class="form-group">
                                         <label for="">Contact</label>
                                         <input type="text" class="form-control" name="cnum" placeholder="contact" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-6">
                                    <div class="form-group">
                                       <label for="">Address</label>
                                       <input type="text" class="form-control" name="address" placeholder="address" required="require">
                                    </div>
                                 </div>
                                 
                                   <div class="col-md-6">
                                      <div class="form-group">
                                         <label for="">Email</label>
                                         <input type="email" class="form-control" name="Email" placeholder="Email" required="require">
                                      </div>
                                   </div>

                                   <div class="col-md-11">
                                      <div class="form-group">
                                         <label for="" class="fas fa-certificate">  NC Certificate</label>
                                         <div class="custom-file">
                                           <input type="file"  class="custom-file-input" name="ncc" id="ncc">
                                           <label class="custom-file-label"  required="require">Choose file</label>
                                        </div>
                                      </div>
                                   </div>

                                   <div class="col-md-11">
                                      <div class="form-group">
                                         <label for="" class="fas fa-id-card">  Valid ID or Barangay ID</label>
                                         <div class="custom-file">
                                           <input type="file" class="custom-file-input"  name="valid" id="valid">
                                           <label class="custom-file-label"  required="require">Choose file</label>
                                        </div>
                                      </div>
                                   </div>

                                  <!-- otehjpaohf -->
                                 </div><br><br>
                                   
                                   
                                </div>
                             </div>
                          </div>
                       </div>
                       <!-- /.card-body -->
                        <div class="row">
                           <div class="col-4 offset-3">
                                 <!-- <button type="submit" class="btn btn-block" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">Create Account</button> -->
                                 <input type="submit" class="btn btn-block" value="Create Account" name="submit" style="background-color: rgba(28,153,84);color: rgb(235,235,235)">
                           </div>
                        </div>
                           <!-- s -->
                        </div>
              </div>
              <!-- /.container-fluid -->
           </section>
     </div>
    <footer class="page-footer">
        <div class="container">
            <div class="links"><a href="#">About me</a><a href="#">Contact me</a><a href="#">Projects</a></div>
            <div class="social-icons"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-instagram-outline"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a></div>
        </div>
    </footer>
    <script>
         function triggerClick(e) {
         document.querySelector('#profileImage').click();
        }
         function displayImage(e) {
                     if (e.files[0]) {
                     var reader = new FileReader();
                     reader.onload = function(e){
                     document.querySelector('#profileDisplay').setAttribute('src', e.target.result);
                         }
                     reader.readAsDataURL(e.files[0]);
                  }
          }
    </script>
    <!-- <h1>Hello</h1>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <img src="" alt="">
                <h2 class="card-title">Title</h2>
                <p class="card-text">player</p>
            </div>
        </div>
    </div> -->
    
</body>
<script src="../assets/js/jquery-3.4.1.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.js"></script>
</html>