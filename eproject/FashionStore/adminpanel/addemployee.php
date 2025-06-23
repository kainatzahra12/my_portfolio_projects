<?php

include_once "../code.php";
?>
<div class="container">
   
    <h1 class="text-center mt-5 bg-info">ADD EMPLOYEES</h1>
     <form action="../code.php" method="post" >
        <label for="exampleFormControlInput1"  class="form-label">Employee name</label>
        <br>
<input type="text" class="form-control" placeholder=" name" name="e_name" class="form-control"><br>
  <label for="exampleFormControlInput1"  class="form-label">email</label>
        <br>
<input type="text" class="form-control" placeholder="email" name="email" class="form-control"><br>
<label for="exampleFormControlInput1"  class="form-label">password</label>
     
<input type="text" class="form-control" placeholder="password" name="password" class="form-control"><br>


<button type="submit" class="btn btn-success" name="addemployee">+ADD employee</button>

     </form>
    
    
   
  
     </div>