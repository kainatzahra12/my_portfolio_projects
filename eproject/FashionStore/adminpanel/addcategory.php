<?php

include_once "../code.php";
?>
<div class="container">
   
    <h1 class="text-center mt-5 bg-info">ADD CATEGORY</h1>
     <form action="../code.php" method="post" enctype="multipart/form-data">
        <label for="exampleFormControlInput1"  class="form-label">category name</label>
        <br>
<input type="text" class="form-control" placeholder="category name" name="cat_name" class="form-control"><br>
  <label for="exampleFormControlInput1"  class="form-label">category detail</label>
        <br>
<input type="text" class="form-control" placeholder="category detail" name="category_detail" class="form-control"><br>
<label for="exampleFormControlInput1" class="form-label">choose image</label>
        <br>
<input type="text" class="form-control" onclick="this.type='file'" name="fileupload" placeholder="choose file"class="form-control">
<br>

<button type="submit" class="btn btn-success" name="add_cat">+ADD CATEGORY</button>

     </form>
    
    
   
  
     </div>