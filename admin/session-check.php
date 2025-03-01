 <?php session_start();


$cn=mysqli_connect("localhost","root","","mandar");



    if(!isset( $_SESSION['id']))
    {
        echo "<script>
       
        window.location.href='index.php';
        </script>";
    }
    else
    {
        $id =$_SESSION['id'];
        $qca = "SELECT * FROM admindetail WHERE aid = $id";
        $resultA=mysqli_query($cn,$qca);
        $dataA=mysqli_fetch_assoc($resultA);
    }


?> 