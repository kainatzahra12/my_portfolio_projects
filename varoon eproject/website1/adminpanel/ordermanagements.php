<h1>order management</h1>
<?php
include_once "../code.php";
// session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>data fetch</title>
  </head>
  <body>
    <table class=table>
        <thead>
            <tr>
                <th scope="col">ORDER ID</th>
                <th scope="col">USER ID</th>
                <th scope="col">PRODUCT ID</th>
                <th scope="col">PRODUCT QUANTITY</th>
                <th scope="col">TOTAL AMOUNT</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // select query
            $fetchquery =mysqli_query($connection, "select * from ordersfinal");
    
            foreach($fetchquery as $data){
            ?>
            <tr>
                <td scope="row"><?php echo $data['order_id']?></td>
                <td><?php echo $data['users_id']?></td>
                <td><?php echo $data['pro_id']?></td>
                <td><?php echo $data['pro_qty']?></td>
                <td><?php echo $data['total_amount']?></td>
                <!-- delete button code  -->
                <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['order_id']?>">
               Delete
                 </button>
                  <!-- update button code 
                  <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#update<?php echo $data['order_id']?>">
               update
                 </button> -->
                </td>
         
            </tr>

            <!-- delete Modal code --> 
 <div class="modal fade" id="delete<?php echo $data['order_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="../code.php" method="post">
        <h5 class="modal-title" id="exampleModalLabel">Delete box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="hidden" name ="id" value="<?php echo $data['order_id']?>">
      <h5> Are you sure you want to delete this record??</h5>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>



 <!-- update Modal code 
 <div class="modal fade" id="update<?php echo $data['order_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="../code.php" method="post">
        <h5 class="modal-title" id="exampleModalLabel">update box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="orderid" value="<?php echo $data['order_id']?>">
      <label>old password:</label>
      <input type="text" name ="oldpassd" class="form-control" value="<?php echo $data['password']?>" disabled>
      <br>
      <label>new password:</label>
      <input type="text" name ="newpassd" class="form-control">
      <br>
      <label>confirm password:</label>
      <input type="text" name ="confpassd" class="form-control" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success" name="update">Change password</button>
      </div>
      </form>
    </div>
  </div>
</div> -->

             <?php
            }
            ?>
            
        </tbody>
    </table>

            
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

            
  </body>
</html>