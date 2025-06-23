<?php
include_once "../code.php";

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $fetchquery=mysqli_query($connection,"select * from registers");

    foreach($fetchquery as $data){
        ?>
    <tr>
      <th scope="row"><?php echo $data['id']?></th>
      <td><?php echo $data['name']?></td>
      <td><?php echo $data['email']?></td>
      <td><?php echo $data['PASSWORD']?></td>
      <td><BUtton type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?php echo $data['id']?>">Delete</BUtton>
      <BUtton type="submit" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Update<?php echo $data['id']?>">Update</BUtton></td>
     </tr>
<!-- delete modal code -->
<div class="modal fade" id="delete<?php echo $data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="../code.php" method="post">
      <div class="modal-header">
        
        <h5 class="modal-title">Delete Box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden"name="deleteid"value="<?php echo $data['id']?>">
        <p>Are you sure you want to delete this data??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="delete" class="btn btn-danger">Delete</button>
       
      </div>
      </form>
    </div>
  </div>
</div>


<!-- update modal -->

<div class="modal fade" id="Update<?php echo $data['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="../code.php" method="post">
      <div class="modal-header">
        
        <h5 class="modal-title">update your data </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="idchange"value="<?php echo $data['id']?>">
       <br>
        <input type="text" name="namechange" value="<?php echo $data['name']?>">
        <br>
        <input type="email" name="emailchange" value="<?php echo $data['email']?>">
        <br>
        <input type="text" name="passchange" value="<?php echo $data['PASSWORD']?>">
        <br>
        <p>Are you sure you want to update this data??</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="update" class="btn btn-success">Update</button>
       
      </div>
      </form>
    </div>
  </div>
</div>
        <?php
    }
    
    ?>
   
  </tbody>
</table>
