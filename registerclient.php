
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
      <h2>Register as Client</h2>
     <form action="insert.php" method="post">
    
            Name:<input class="form-control" type="text" name="cusername">
            Email:<input class="form-control"  type="text" name="cemail">
            Password:<input class="form-control"  type="text" name="cpassword">
            Contact info:<input class="form-control mb-3"  type="text" name="ccontact">
            <button type="submit" name="cregister" class="btn btn-danger mb-4" id="register" style="background-color:red;color:white">Register</button>

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
