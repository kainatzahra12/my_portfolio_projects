<?php

include_once "../code.php";
?>
<div class="container">
   
    <h1 class="text-center mt-5 bg-info">ADD PRODUCT</h1>
     <form action="../code.php" method="post" enctype="multipart/form-data">
        <!-- p name -->
        <label for="exampleFormControlInput1"  class="form-label">product name</label>
        <br>
<input type="text" placeholder="product name" class="form-control" name="p_name" class="form-control"><br>

<!-- p-description -->
<label for="exampleFormControlInput1"  class="form-label">product detail</label>
        <br>
<input type="text" class="form-control" placeholder="product detail" name="p_detail" class="form-control"><br>
<!-- p price -->
<label for="exampleFormControlInput1"  class="form-label">product price</label>
        <br>
<input type="text" class="form-control" placeholder="product price" name="p_price" class="form-control"><br>
<label for="exampleFormControlInput1"  class="form-label">choose category</label>
<select class="form-select" aria-label="Default select example" name="c_id">
<option selected disabled>Open this select menu</option>
    <?php

    $addpro=mysqli_query($connection,"select * from subcategory");
    foreach($addpro as $fetchpro){
        ?>
        <option value="<?php echo $fetchpro['sub_id']?>"><?php echo $fetchpro['sub_title']?></option>

        <?php
    }
    ?>
  
</select>
<br><br>
<!-- image -->
<label for="exampleFormControlInput1" class="form-label">choose image</label>
        <br>
<input type="text" class="form-control" onclick="this.type='file'" name="p_image" placeholder="choose file"class="form-control">
<br>

<button type="submit" class="btn btn-success" name="add_sellers">+ADD PRODUCT</button>

     </form>
    
     </div>
   
  
