<?php
include 'connection.php';
include 'session-check.php';

$msg="";
if(isset($_POST["b1"]))
{
    $nm =$_POST['nm'];
    $pass=$_POST['pwd'];
    $que =$_POST['que'];
    $ans =$_POST['ans'];
    $mob =$_POST['mob'];

    $q="UPDATE admindetail SET anm ='$nm',apass='$pass',aque='$que',aans ='$ans',
    amob= '$mob' WHERE aid = $id";  
            
    
                if(mysqli_query($cn,$q))
                {
                    echo "<script>
                    alert('Profile Updated');
                    window.location.href='profile.php';
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
    <title> | Profile</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>
<body class="">
    <div class=" mt-5 row container">
        <div class="col-md-3 shadow-lg mx-auto "> 
        
         <?php include 'header.php'; ?>
      
      </div>

        <div class="col-md-5  p-3 bg-white shadow-lg mx-auto">
     <h3 class="text-center text-primary  ">
                    Update Profile 
                   <p class="text-danger tect-center">

                       <?php echo  $msg;?>
                   </p>
                </h3>

                <hr>


                <form action="profile.php" method="post" >

    
                <label>Name </label>
     <input type="text" name="nm" placeholder="eg. tejas"
     class="form-control mb-3" required value="<?php echo $dataA['anm']?>">

     <label>Email </label>
     <input type="email" name="em" placeholder="eg. ram@gmail.com"
     class="form-control mb-3" required readonly value="<?php echo $dataA['aemail']?>">

      <label >Password</label>
      <input type="text" name="pwd" id=""  class=" mb-3 form-control" value="<?php echo $dataA['apass']?>">
   
     <label>Select Question </label>
     <select name="que" class="form-control" required>
        <option selected diasbled>--Select Security question --</option>
     <option value="What is your Hobby" <?php echo $dataA['aque']?>  >
        What is your Hobby?
    </option>
        <option value="What is your School Name" <?php echo $dataA['aque']?> >
            What is your School Name?
        </option>
        <option value="What is your Favourite food" <?php echo $dataA['aque']?> >
            What is your Favourite Food?
        </option>

    </select>

    <label>Answer </label>
    <input type="text" name="ans" placeholder="Answer"
    class="form-control mb-3" required value="<?php echo $dataA['aans']?>">

    <label>Mobile </label>
    <input type="text" name="mob" placeholder="9865789545"
    class="form-control mb-3" required value="<?php echo $dataA['amob']?>">

    


    <div class="text-center mt-4">
        <input type="submit" value="Update Profile"
        class="btn btn-sm btn-primary" name="b1">

        
    </div>
                </form>
        </div>
</div>
</body>
</html>