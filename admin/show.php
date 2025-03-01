<?php
include 'connection.php';
include 'session-check.php';
$q="SELECT c.cid,c.cname,l.lid,l.lnm,l.limg FROM company c INNER JOIN laptop l ON c.cid = l.cid";
$r=mysqli_query($cn,$q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
</head>
<body>
      
    <div class=" container mt-5 col-12">
        <div class="row">
                            <div class="col-3  ">
                               <?php include"header.php" ;?>
                            </div>
            <div class=" col-9 text-center  bg-white shadow-lg pt-2">
                    <div class="bg-warning shadow-lg mb-5 p-3 ">   <h1> All Laptops</h1></div>
                            
                <div class="row mx-auto  shadow-lg ">   

                <table class="table table-bordered" id="info">
                    <thead>
                        <tr>

                            <th>Sr. No</th>
                            <th>Model Name</th>
                            <th>Company</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
             
                    <tbody>

                        <?php
                        $i =1;
                                while ($data=mysqli_fetch_assoc($r))
                                {
                                  // var_dump($data);
                                    ?> 

                                    <tr>
                                        <td><?php echo $i?></td>
                                        <td><?php echo $data['lnm'];?></td> 
                                        <td><?php echo $data['cname'];?></td> 
                                        <td>
                                            <img src="<?php echo $data['limg'];?>" width="70">
                                        </td>
                                        <td>
                                            <a href="edit-product.php?id=<?php echo $data['lid']?>">
                                            Edit
                                        </a>

                                        |

                                        <a href="#" class="text-danger">Delete</a>
                                        </td>
                                    </tr>
                   
                   <?php
                   $i++;
                                }
                                ?>
                            
                        </div>
                    </tbody>
                    </table>
             </div>

        </div>
    </div>    
    
                    

            <script src="https://code.jquery.com/jquery-3.7.0.js"></script> 
            <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script> 
            <script>
                new DataTable('#info');
            </script>      
      
</body>
</html>