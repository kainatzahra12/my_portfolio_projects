<!-- gift articles -->
<?php
include_once "../code.php";

?>


<div class="container">
   
    <h1 class="text-center mt-5 bg-info">add sub category</h1>
    
     <form action="../code.php" method="post" enctype="multipart/form-data">
       <label for="exampleFormControlInput1"  class="form-label">choose category</label>
<select class="form-select" aria-label="Default select example" name="c_id">
<option selected disabled>Open this select menu</option>
    <?php

    $addpro=mysqli_query($connection,"select * from category");
    foreach($addpro as $fetchpro){
        ?>
        <option value="<?php echo $fetchpro['cat_id']?>"><?php echo $fetchpro['cat_name']?></option>

        <?php
    }
    ?>
  
</select>
<br><br>
 <label>Subcategory Name:</label>
    <input type="text" name="subcat_name" class="form-control" placeholder="subtitle"><br>

    <!-- <label>Subcategory Detail:</label>
    <textarea name="subcat_detail" class="form-control" placeholder="category detail"></textarea><br>

      <br>
<input type="text" class="form-control" onclick="this.type='file'" name="fileupload" placeholder="choose file"class="form-control">
<br> -->

    <input type="submit" name="add_subcat" value="Add Subcategory">
     </form>
    
    
   
  
     </div>