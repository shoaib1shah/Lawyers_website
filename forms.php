<!-- Favicon -->
<link href="img/favicon.ico" rel="icon">
     <!-- Google Web Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
       <!-- Icon Font Stylesheet -->
       <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
     <!-- Libraries Stylesheet -->
     <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
           <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">






<?php
include("config.php");
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
   <?php
   require_once("links.php");
   ?>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sign In Start -->
        <div class="container-fluid">
            <div class="row h-100 align-items-center justify-content-center" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="bg-secondary rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <a href="index.html" class="">
                                <!-- <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3> -->
                            </a>
                            <!-- <h3>Sign In</h3> -->
                        </div>
                            <form action="" method="post">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Full name" name="cname">
                            <!-- <label for="floatingInput">Name</label> -->
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control" id="floatingPassword" placeholder="Why to hire" name="reason">
                            <!-- <label for="floatingPassword">Reason</label> -->
                        </div>
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <!-- <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1"> -->
                                <!-- <label class="form-check-label" for="exampleCheck1">Check me out</label> -->
                            <!-- </div> -->
                            <!-- <a href="">Forgot Password</a> -->
                        </div>
                        <button type="submit" class="btn btn-primary py-3 w-100 mb-4" name="submit">SUBMIT</button>
                        <!-- <p class="text-center mb-0">Don't have an Account? <a href="signup.php" >Sign Up</a></p> -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
  <?php
  require_once("links2.php");
  ?>
</body>

</html>
<?php

if (isset($_POST["submit"])) {
    $cname=trim($_POST["cname"]);
    $reason=$_POST["reason"];
    $qinsert="INSERT INTO `info`(`cname`,`reason`) VALUES ('$cname','$reason')";
    $result=mysqli_query($conn, $qinsert);
 
    if ($result) {
        echo "<script>alert('Data inserted')
        location.assign('lawyer.php')</script>";
    }
    else {  
        echo "<script>alert('Data error')</script>";
    }
}
?>

