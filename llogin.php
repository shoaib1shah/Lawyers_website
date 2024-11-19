
<?php
 require "config.php";

if(isset($_POST['llogin']))
{
    
$lemail=$_POST['lemail'];
$lpassword=$_POST['lpassword'];
// echo $username,$userpassword;
$llogin="SELECT * FROM `lawyerdata`where lemail= '$lemail'AND lpassword = '$lpassword'";
$result1=mysqli_query($conn,$llogin);

if(mysqli_num_rows($result1))
{
    
    session_start();
    $_SESSION['llogin']=$cemail;
  echo "<script>alert('Lawyer Login successfully');
  location.assign('lawyer.php');
  </script>
  ";

}
else
{
    echo "<script>alert('Layer Login failed')</script>
      window.location.href='registerlawyer.php';";
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
     <div class="container mt-5" >
      <h2>Login as Lawyer</h2>
     <form action="" method="post"> 
            Email:<input class="form-control"  type="text" name="lemail">
            Password:<input class="form-control"  type="text" name="lpassword">
            <button type="submit" name="llogin" class="btn btn-danger mb-4 mt-5" id="register" style="background-color:red;color:white">Login</button>

</form>
</div>
    <!-- main section end-->
      <!-- Footer Start-->
      <?php include 'footer.php' ?> 
     <!-- Footer End-->
	<!-- JS links here -->
	
    <?php include 'links2.php' ?> 
        
    </body>
</html>