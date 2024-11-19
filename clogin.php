<?php
 require "config.php";

if(isset($_POST['clogin']))
{
    
$cemail=$_POST['cemail'];
$cpass=$_POST['cpass'];
// echo $username,$userpassword;
$clogin="SELECT * FROM `clientdata`where cemail= '$cemail'AND cpass= '$cpass'";
$result1=mysqli_query($conn,$clogin);

if(mysqli_num_rows($result1))
{
    
    session_start();
    $_SESSION['clogin']=$cemail;
  echo "<script>alert('Client Login successfully');
  location.assign('clientpanel.php');
  </script>
  ";

}
else
{
    echo "<script>alert('Client Login failed')</script>
      window.location.href='clogin.php';";
}

}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Lawyer HTML-5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <?php include 'links.php' ?>
</head>

<body>

    <!-- Preloader Start -->
    <?php include 'preloader.php' ?>
    <!-- Preloader Start -->
    <!-- Header Start -->
    <?php include 'header.php' ?>
    <!-- Header End -->
    <!-- main section -->
    <div class="container mt-5">
        <h2>Login as Client</h2>
        <form action="" method="post">
            Email:<input class="form-control" type="text" name="cemail">
            Password:<input class="form-control" type="text" name="cpass">
            <button href="clientpanel.php"  type="submit" name="clogin" class="btn btn-danger mb-4 mt-5" id="register"
                style="background-color:red;color:white">Login</button>

        </form>
    </div>
    <!-- main section end-->
    <!-- Footer Start-->

    <!-- Footer End-->
    <?php include 'footer.php' ?>
    <!-- JS links here -->

    <?php include 'links2.php' ?>

</body>

</html>
