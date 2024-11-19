<?php
include "config.php";
session_start();


$searchQuery = ""; // Initialize search query variable
if (isset($_GET['search'])) {
    $searchQuery = $_GET['search'];
}

// Modify SQL query to include the search functionality
$selectdata = "SELECT lname, wincases, experience, img, phone, lemail, runningcases, types, city_name 
               FROM lawyerdata AS ld 
               INNER JOIN city AS c ON c.city_id = ld.city_id 
               INNER JOIN lawyertype AS lt ON lt.type_id = ld.type_id 
               WHERE city_name LIKE '%$searchQuery%' OR types LIKE '%$searchQuery%'";

$resselect = mysqli_query($conn, $selectdata);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>


<?php
include "header.php";
?>
<body>
    <div class="container-fluid bg-dark" style="height: 80px; ">
       <nav class="d-flex justify-content-evenly text-white">
        <!-- <h3 class="mt-3">Welcome user : <?php echo $_SESSION['clogin']?> </h3> -->
      
        <a href="logout.php" class="btn btn-danger" name="clogout">Logout</a>

       </nav>
    </div>
    <div class="container-fluid">
     <div class="row text-center mt-4"><h2>Hire a lawyer</h2></div>
     
     <form method="GET" action="">
                <input class="form-control w-50 d-inline-block" type="search" name="search" placeholder="Search by name or type..." value="<?php echo $searchQuery; ?>">
                <button type="submit" class="btn btn-primary">Search</button>
            </form>
   
     <?php
     include "links.php"
     ?>
       <!-- <form action="" method="Post">
       <div class="container-fluid d-flex justify-content-evenly mt-5">
       <select class="form-select w-25" aria-label="Default select example" name="lawyertype">
       <option selected>Select by Catagory</option>
  <?php
  $selecttype="SELECT * FROM `lawyertype`";
  $result=mysqli_query($conn,$selecttype);
  while($row=mysqli_fetch_assoc($result))
  {
    ?>
    echo "<option value='<?php echo $row['type_id'];?>'><?php echo $row['types'];?></option>"
 
  <?php
  }
  ?>
</select>
        <button type="button" class="btn btn-danger">Search</button>
        <select class="form-select w-25" aria-label="Default select example">
  <option selected>Select by city</option>
  <?php
  $selectcity="SELECT * FROM `city`";
  $result=mysqli_query($conn,$selectcity);
  while($row=mysqli_fetch_assoc($result))
  {
    ?>
    echo "<option value='<?php echo $row['city_id'];?>'><?php echo $row['city_name'];?></option>"
 
  <?php
  }
  ?>
</select>
     
        <button type="button" class="btn btn-danger">Search</button>
        </div>
        </form> -->
 
 <!-- Lawyer Table -->
 <div class="container-fluid mt-5">
            <table class="table">
                <thead>
                    <tr class='text-center'>
                        <th scope="col">Picture</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Contact</th>
                        <th scope="col">No. of Win Cases</th>
                        <th scope="col">No. of Running Cases</th>
                        <th scope="col">Years of Experience</th>
                        <th scope="col">City</th>
                        <th scope="col">Type</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while ($row = mysqli_fetch_assoc($resselect)) {
                        echo "
                            <tr class='fs-6 text-center'>
                                <td><img src='upload/{$row['img']}' alt='' height='50px' width='50px'></td>
                                <td>{$row['lname']}</td>
                                <td>{$row['lemail']}</td>
                                <td>{$row['phone']}</td>
                                <td>{$row['wincases']}</td>
                                <td>{$row['runningcases']}</td>
                                <td>{$row['experience']}</td>
                                <td>{$row['city_name']}</td>
                                <td>{$row['types']}</td>
                                <td><a href='forms.php' class='btn btn-success btn-sm'>Appoint</a></td>
                            </tr>
                        ";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<?php
include "links2.php";


// if(!isset($_SESSION['clogin']))

?> 
<?php
include "footer.php";
?>