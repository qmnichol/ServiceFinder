<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <div class="login-box" style="margin-top: 100px;">
        <section class="content">
            <div class="container-fluid">
                <div class="card">
                    <div class="col-md-12">
                        <div class="col-md-3">
            <?php
                if (isset($_POST["create_submit"])) {
                    $image = $_POST["image"];
                    
                    $connection = mysqli_connect("localhost", "root", "", "service_finder");
                    $sql = "INSERT INTO sign_up(image) VALUES('$image')";
                    if (mysqli_query($connection, $sql)) {
                        ?>
                        <div class="alert alert-success">
                            <b>Success</b>
                        </div>
                <?php
                    }
                }
            ?>
                
                            <div class="form-group text-center" style="position: relative;">
                            
                                    <span class="img-div">
                                        <div class="text-center img-placeholder"  onClick="triggerClick()">
                                            <h4>Upload image</h4>
                                        </div>
                                        <?php
                        $sql = "SELECT * FROM sign_up";
                        $connection = mysqli_connect("localhost", "root", "", "service_finder");
                        $result = mysqli_query($connection, $sql);
                        while ($row = mysqli_fetch_array($result)) {
                            ?>
                                        <img src="<?php  echo $row["image"];  ?>" onClick="triggerClick()" id="profileDisplay" style="width: 200px; height: 200px" class="img rounded-circle" alt="profile">
                                    </span>
                                        <input type="file" name="image" onChange="displayImage(this)" id="profileImage" class="form-control" style="display: none;" required accept='image/*'>
                                        <p>Please Attach Photo</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>

</body>
</html>