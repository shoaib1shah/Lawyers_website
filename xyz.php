<?php
if(isset($_POST["login"]))
{
  
    $uemail = $_POST["uemail"];
    $upass = $_POST["upass"];
    $qcheck="SELECT uname,uemail,upass,urole FROM `register` WHERE `uemail`='$uemail' AND `upass`='$upass'";
    $result = mysqli_query($conn, $qcheck);
    $check=mysqli_num_rows($result);
   
 
    if($check>0)
    {
        $row=mysqli_fetch_assoc($result);
        print_r($row);

        $_SESSION["u_name"] = $row['uname'];
        $_SESSION["u_email"] = $row['uemail'];
        $_SESSION["u_pass"] = $row['upass'];
        $_SESSION["u_role"] = $row['urole'];
    
     echo "<script>window.location.href='index.php'</script>";
    
    }
    else
    {
        
        echo "<script>window.location.href='signup.php'</script>";
     
    }
}
?> 
