    <?php
        include 'connection.php';

if(isset($_POST["b1"]))
{
    $em=$_POST["em"];
    $pass=$_POST["pwd"];

    $qS="SELECT * FROM admindetail WHERE aemail = '$em' AND apass = '$pass'";
    $result = mysqli_query($cn,$qS);
    $count = mysqli_num_rows($result);

    if($count ==1)
        {
            session_start();
            $data = mysqli_fetch_assoc($result);
           // var_dump($data);
           $_SESSION['id'] =$data['aid'];
           echo "<script>
            alert('Login Successfully');
            window.location.href='profile.php';
            </script>";

        }
      else
     {
        echo "<script>
        alert('faild');
        window.location.href='index.php';
        </script>";
   
     }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/myjquery.js"></script>
</head>
<body>
    <div class="col-md-4 mx-auto shadow-lg mt-5 p-3">
        <form   method="POST" action="index.php">
            <h3 class="text-center text-primary">Admin login</h3>
            
            <hr>
       <label >Email</label>
        <input type="email"  
        class="form-control mb-3" placeholder="Enter Email" name="em" required>

     <label >password</label>
        <input type="password"  placeholder="Enter Password" 
        class="form-control mb-3" name="pwd" required>
        
<div class="text-center">
        <input type="submit"  
        class="btn btn-primary my-4" value="Login" name="b1">

        <a href="forgot-password.php" class="text-primary text-decoration-none">Forget password</a>
    </div>
        </form>

        

</div>
        
    
