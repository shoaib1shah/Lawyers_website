<?php
include "config.php";
session_start();
?>

<script>
    function showAccept() {
        alert('Request Accepted !!!');
    }
    function showReject() {
        alert('Request Rejected !!!');
    }
</script>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lawyer Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>


<?php
include "header.php";
?>
<body>

    <div class="container-fluid">
     <div class="row text-center mt-4"><h2>Hire a lawyer</h2></div>
     
     <?php
     include "links.php"
     ?>
       
 
 <!-- Lawyer Table -->
   <!-- Table Start -->
   <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-xl-6">
                        <div class="bg-secondary rounded h-100 p-4">
                            <!-- <h6 class="mb-4">All Users <a href="adduser.php" class="btn btn-danger btn-sm mx-5 text">Add User</a></h6> -->

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Use Id</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <!-- <th scope="col">User Role</th> -->
                                        <!-- <th scope="col">Operation</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                            
                                  <?php
                                  $qselect="SELECT  `id`, `cname`, `reason`, `urole` FROM `info` WHERE 1";
                                  $result=mysqli_query($conn,$qselect);
                                  while( $row=mysqli_fetch_assoc($result))
                                  {

                                 
                                 
                                echo "
                                <tr>
                                   <td>$row[id]</td>
                                     <td>$row[cname]</td>
                                     <td>$row[reason]</td>  
                                       <td>
                                              <button onclick='showAccept()' class='btn btn-success btn-sm'>Accept</button>
                                              <button onclick='showReject()' class='btn btn-danger btn-sm'>Reject</button>
                                          </td>
                                    
                                </tr>
                                ";
                                  
                                  };
                                
                                
                                  ?>            
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
            <!-- Table End -->
       
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


 <!-- Footer End-->
 <?php include 'footer.php' ?>
    <!-- JS links here -->

    <?php include 'links2.php' ?>

</body>
</html>
