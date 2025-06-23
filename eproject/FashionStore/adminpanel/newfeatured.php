<?php
include_once "../code.php";

?>
<h1 class="text-center mt-5 bg-info">VIEW NEW FEATURED</h1>
<table  class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <!-- <th scope="col">NAME</th> -->
      <th scope="col">CATEGORY-IMAGE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>

  <?php
  // $connection=mysqli_connect("localhost","root","","customer");
  $fetchquery=mysqli_query($connection,"select * from featured");
  foreach($fetchquery as $data1){
    ?>
 <tr>
      <th scope="row"><?php echo $data1['id']?></th>
      <!-- <td><?php echo $data1['arrivname']?></td> -->
      <td><img src="../assets/img/categories/<?php echo $data1['f_image']?>" alt="not found" height="100px" width="100px"></td>
      <td>
        <!-- <button type="submit"class="btn btn-success" name="update" data-bs-toggle="modal" data-bs-target="#update<?php echo $data1['id']?>" >UPDATE</button> -->
      <button type="submit"class="btn btn-danger" name="delete1"data-bs-toggle="modal" data-bs-target="#delete<?php echo $data1['id']?>">DELETE</button>
    </td>
    </tr>
<!-- DELETE MODAL CODE -->

<div  class="modal fade" id="delete<?php echo $data1['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="../code.php" method="post">
        <h5 class="modal-title">Delete Box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this data??</p>
        <input type="hidden" name="deleteid" value="<?php echo $data1['id']?>">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="deletefeatured" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- update modal code -->
<div  class="modal fade" id="update<?php echo $data1['ID']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <form action="code.php" method="post">
        <h5 class="modal-title">Update Box</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to update this data??</p>
        <input type="text" name="changeid" value="<?php echo $data1['ID']?>">
        <br>
        <input type="text" name="changename" value="<?php echo $data1['NAME']?>">
        <br>
        <!-- <input type="text" name="changeemail" value="<?php echo $data1['cat_image']?>">
        <br> -->
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="updatecat" class="btn btn-success">update</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <?php
  }
  ?>
   
   
  </tbody>
</table>
