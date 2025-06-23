<?php

include_once "../code.php";
?>
<div class="container">
   
    <h1 class="text-center mt-5 bg-info">featured collection</h1>
     <form action="../code.php" method="post" enctype="multipart/form-data">
        <!-- p name -->
       
<!-- image -->
<label for="exampleFormControlInput1" class="form-label">choose image</label>
        <br>
<input type="text" class="form-control" onclick="this.type='file'" name="fileupload" placeholder="choose file"class="form-control">
<br>
<br>
<br><br>
<button type="submit" class="btn btn-success" name="add_featured">+ADD featured</button>

     </form>
    
     </div>
   
  
