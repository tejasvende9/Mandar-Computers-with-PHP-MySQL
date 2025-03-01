<?php
include 'session-check.php';

include 'connection.php';
$qci="SELECT * FROM company";
$r=mysqli_query($cn,$qci);
//$cn=mysqli_connect("localhost","root","","mandar");
$folder="images/";
$msg="";
if(isset($_POST["b1"]))
{
  $mdn=$_POST['mdn'];
  $pri=$_POST['pri'];
  $cid=$_POST['cid'];

  $info=$_POST['info'];
  $ram=$_POST['ram'];
  $pro=$_POST['pro'];
  $lgraph=$_POST['lgraph'];
  $os=$_POST['os'];
  $ssd=$_POST['ssd'];
  $hdd=$_POST['hdd'];
  
  $photo = basename($_FILES["lph"]["name"]);
    $path = $folder.$photo;
  
    if(move_uploaded_file($_FILES["lph"]["tmp_name"],$path))
    {
     
     $qC="INSERT INTO laptop (lnm,cid,lprice,linfo,lram,lpro,lgraph,los,lssd,lhdd,limg) 
          VALUES ('$mdn',$cid,'$pri','$info','$ram','$pro','$lgraph','$os','$ssd','$hdd','$path')";

        if(mysqli_query($cn,$qC))
          {
         echo "<script>
         alert('Company Inserted Successfully');
         window.location.href='show.php';
         </script>";
          }
          else
            {
           $msg ="Failed To Update Profile";
          }
        }
    else
        {
            $msg = "Failed TO upload Image";
        }
   }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add-laptop</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/myjquery.js"></script>
</head>
<body>
    <div class="row  ">
    <div class="col-md-2  shadow-lg  mx-4 mt-5">
    <?php include 'header.php'; ?>

    </div>

    <div class="shadow-lg mt-5 row col-md-6">
    <form action="add-laptop.php" method="post" enctype="multipart/form-data">

 Upload Photo<br>
<input type="file" name="lph" class="form-control mb-3" required><br><br>




<input type="text" name="mdn" id="" placeholder="Enter Model Number" class="form-control text-center mb-2">


    <select name= "cid" class="form-select form-select mb-3 text-center" aria-label=".form-select-lg example">
       <option selected>Select Company</option>
       <?php 
       while($data=mysqli_fetch_assoc($r)){
           //var_dump($data);
    ?>
       <option value="<?php echo $data['cid']; ?>"><?php echo $data['cname']; ?></option>
       
       <?php
       }
       ?>
       </select>


       
       
       
       
       <input type="text" name="pri" id="" placeholder="Price" class="form-control mb-2 ">
       
       
       
<input type="text" name="info" id="" placeholder="Extra Info" class="form-control mb-2 ">



<input type="text" name="ram" id="" placeholder="RAM" class="form-control mb-2 ">



<input type="text" name="pro" id="" placeholder="Enter the Processor" class="form-control mb-2 ">




<input type="text" name="lgraph" id="" placeholder="Graphics" class="form-control mb-2 ">




<input type="text" name="os" id="" placeholder="OS" class="form-control mb-2 ">



<input type="text" name="ssd" id="" placeholder="SSD" class="form-control mb-2 ">



<input type="text" name="hdd" id="" placeholder="HDD" class="form-control mb-2 ">






<div class="text-center   ">
    <input type="submit" value="Add Laptop" name="b1" class="btn bg-primary">
</div>
</form>

</div>
</div>
</div>
</div>
</body>
</html>