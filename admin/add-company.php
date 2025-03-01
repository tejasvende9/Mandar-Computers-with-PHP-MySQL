<?php
include 'session-check.php';
include 'connection.php';
$msg="";
$qci="SELECT * FROM company";

 $r=mysqli_query($cn,$qci);


if(isset($_POST["b1"]))
{
  $com=$_POST['cop'];

  $qC="INSERT INTO company (cname) VALUES ('$com')";


  // echo $qC;
  if(mysqli_query($cn,$qC))
  {
      echo "<script>
      alert('Company Inserted Successfully');
      window.location.href='add-company.php';
        </script>";
  }
  else
  {
      $msg ="Failed To Update Profile";
  }
}


 



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-company</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/myjquery.js"></script>
</head>
<body>
    <div class="row  ">
    <div class="col-md-2  shadow-lg  mx-4 mt-5">
    <?php include 'header.php'; ?>

    </div>

    <div id="" class="shadow-lg mt-5 row col-md-6">

        <div class="col-md-6 p-3">
            <h2 class="text-primary text-center">Company</h2>
            <form action="add-company.php" method="post"> 
                 <label >Add company</label>
                  <input type="text" name="cop" class="form-control mt-1" required>
                     <div class="mt-3 text-center">
                         <input type="submit" value="Add" name="b1" class="btn btn-primary ">
            
                      </div>
        </form>
      </div>

        <div class="col-md-6 p-3 mt-5">
        <table class="table table-bordered ">
                  <thead>
                     <tr>
                     <th >id</th>
                     <th >Companies</th>
                     
                   </tr>
                  </thead>
               <tbody>
               <tr>
                <?php while($data=mysqli_fetch_assoc($r))
               {
                     //var_dump($data);
                     ?>
                 
                  
     
                   <td><?php echo $data['cid']; ?></td>
                    <td><?php echo $data['cname']; ?></td>
      
     
                </tr>
              <?php
                 }
                ?>

        </div>
    </div>
    </div>
</body>
</html> 









