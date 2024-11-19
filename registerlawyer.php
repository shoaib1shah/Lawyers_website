<?php
include "config.php"
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
      <h2>Register as Lawyer</h2>
     <form action="insert.php" method="post" enctype="multipart/form-data">
            Name:<input class="form-control" type="text" name="lname">
            Email:<input class="form-control"  type="text" name="lemail">
            Password:<input class="form-control"  type="text" name="lpassword">
            Contact info:<input class="form-control mb-3"  type="text" name="lphone">
            Upload Image:<input class="form-control mb-3"  type="file" name="limg">
          City: <select class="form-select" aria-label="Default select example" name="lcity">
         <?php
         $cityselect="SELECT * FROM `city`";
         $result=mysqli_query($conn,$cityselect);
         while($row=mysqli_fetch_assoc($result))
         {
          ?>
          <option value="<?php echo $row['city_id'];?>"><?php echo $row['city_name'];?></option>
       
         <?php
         }
         ?>
          
         </select><br>
        Lawyer Type: <select class="form-select" aria-label="Default select example" name="ltype">
         <?php
         $cityselect="SELECT * FROM `lawyertype`";
         $result=mysqli_query($conn,$cityselect);
         while($row=mysqli_fetch_assoc($result))
         {
          ?>
          <option value="<?php echo $row['type_id'];?>"><?php echo $row['types'];?></option>
       
         <?php
         }
         ?>
          
         </select><br>
            No. of Win Cases:<input class="form-control mb-3"  type="text" name="lwincases">
            No. of Running Cases: <input class="form-control mb-3"  type="text" name="lrunningcases">
           Years of Experience: <input class="form-control mb-3"  type="text" name="lexperience">
            <button type="submit" name="lregister" class="btn btn-danger mb-4" id="register" style="background-color:red;color:white">Register</button>

</form>
</div>
<?php
  if(isset($_POST['Register']))
  {
    $lid=$_POST['lid'];
    $lname=$_POST['lname'];
    $wincases=$_POST['wincases'];
    $experience=$_POST['experience'];
    $img=$_POST['img'];
    $city_id=$_POST['city_id'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $type_id=$_POST['type_id'];
    $runningcases=$_POST['runningcases'];
 // $ccontact=$_POST['ccontact'];
   $lawyerdata=" INSERT INTO `lawyerdata`(`lid`, `lname`, `wincases`, `experience`, `img`, `city_id`, `phone`, `email`, `password`, `type_id`, `runningcases`) VALUES ('[lid]','[lname]','[wincases]','[experience]','[img]','[city_id]','[phone]','[password]','[email]','[type_id]','[runningcases]')";
    // $insertclient= "INSERT INTO `info`(`id`, `cname`, `reason`) VALUES ('$cemail','$cusername','$cpass','$ccontact')";
    $result=mysqli_query($conn,$insertclient);
    if($result)
    {
      echo "<script>alert('Data inserted Successfully')
      ;
      </script>";
  
    }
    else
    {
      echo "<script>alert('Data inserted error')
    ;
      </script>";
  
    }
  }
  ?>
  
    <!-- main section end-->
      <!-- Footer Start-->
      <?php include 'footer.php' ?> 
     <!-- Footer End-->
	<!-- JS links here -->
	
    <?php include 'links2.php' ?> 
        
    </body>
</html>





