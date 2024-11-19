<?php
require "config.php";
if(isset($_POST['lregister']))
{
  $lname=$_POST['lname'];
  $lemail=$_POST['lemail'];
  $lpass=$_POST['lpassword'];
  $lphone=$_POST['lphone'];
  $lcity=$_POST['lcity'];
  $ltype=$_POST['ltype'];
  $lwincases=$_POST['lwincases'];
  $lrunningcases=$_POST['lrunningcases'];
  $lexperience=$_POST['lexperience'];
  $limg=$_FILES['limg'];
  $limg_loc=$_FILES['limg']['tmp_name'];
  $limg_name=$_FILES['limg']['name'];
  $linsert="INSERT INTO `lawyerdata`(`lname`, `wincases`, `experience`, `img`, `city_id`, `phone`, `email`, `password`, `type_id`, `runningcases`) VALUES ('$lname','$lwincases','$lexperience','$limg_name','$lcity','$lphone','$lemail','$lpass','$ltype','$lrunningcases')";
$result=mysqli_query($conn,$linsert);
if($result)
 {
   $limg_des='upload/'.$limg_name;
move_uploaded_file($limg_loc,'upload/'.$limg_name);
    echo "<script>alert('Data inserted Successfully')
    location.assign('llogin.php');
    </script>";
  }
  else
  {
    echo "<script>alert('Error in insertion')</script>";
  }
}
if(isset($_POST['cregister']))
{
  $cemail=$_POST['cemail'];
  $cusername=$_POST['cusername'];
  $cpass=$_POST['cpassword'];
  $ccontact=$_POST['ccontact'];
  $insertclient= "INSERT INTO `clientdata`(`cemail`, `cusername`, `cpass`, `ccontact`) VALUES ('$cemail','$cusername','$cpass','$ccontact')";
  $result=mysqli_query($conn,$insertclient);
  if($result)
  {
    echo "<script>alert('register successfully')
    window.location.assign('clogin.php');
    </script>";

  }
  else
  {
    echo "<script>alert('Data inserted error')
  window.location.assign('registerclient.php');
    </script>";

  }
}
?>
