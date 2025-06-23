<?php
$connection =mysqli_connect("localhost","root","","e_project");

session_start();

// if($connection){
//     echo "working";
// }

// delete code with modal

 if(isset($_POST['delete'])){
    $id = $_POST['id'];

    $deleteQuery = mysqli_query($connection,"delete from register where id = '$id'");

    if($deleteQuery){
        echo "<script>
        alert('Data deleted successfully')
        location.assign('adminpanel/public.php?profile')
        </script>";
        }
      }

// form handling code 

 if(isset($_POST['addcat'])){
    $cat_name = $_POST['cat_name'];
   

 // file uploading
    $file_name = $_FILES['catimage']['name'];
    $file_size = $_FILES['catimage']['size'];
    $file_tmp_name = $_FILES['catimage']['tmp_name'];
    $file_type=pathinfo($file_name, PATHINFO_EXTENSION);

    $destination="images1/".$file_name;

    if($file_type=="jpg" || $file_type=="jpeg" || $file_type=="png"){
      // give data here into bytes 
      if($file_size <= 2000000){
        if(move_uploaded_file($file_tmp_name,$destination)){
      // insert query
        $insertquery = mysqli_query($connection,"insert into categories (id,name,Image)
      values ('$cat_name','$file_name'");

      if($insertquery){
          echo"<script>
         alert('your data inserted successfully')
         location.assign('adminpanel/public.php?addcategory')
       </script>";
    }
    }
      }
      else{
        echo"<script>
        alert('File must be less 2mb or 2mb')
        location.assign ('adminpanel/public.php?addcategory')
        </script>";
      }

    }
    else{
      echo"<script>
      alert('File must be jpg ,jpeg and png')
      location.assign('adminpanel/public.php?addcategory')
      </script>";
    }
    }
 

// update code with model

if (isset($_POST['update'])) {
    $idchange = $_POST['userid'];
    $new_password = $_POST['newpassd'];
    $conf_password = $_POST['confpassd'];

    if ($new_password == $conf_password) {
        $updateQuery = mysqli_query($connection, "UPDATE register SET password='$conf_password' WHERE id='$idchange'");
        if ($updateQuery) {
            echo "<script>
            alert('Password changed successfully');
            location.assign('adminpanel/public.php?profile');
            </script>";
        }
    } else {
        echo "<script>
        alert('New password and confirm password must match.');
        </script>";
    }



    

    // if($new_password == $conf_password){
    //   echo "<script>
    //   echo 'password change successfully'
    //   </script>";
    // }else{
    //   echo "<script>
    //   echo 'new password is not match to confirm password should be same'
    //   </script>";
    // }
    //  if($updateQuery){
    //      echo "<script>
    //      alert('Data updated successfully')
    //      location.assign('adminpanel/public.php?profile')
    //      </script>";
    //  }
  }
// // register form
// if(isset($_POST['update'])){
//     $id = $_POST['id'];
//     $name = $_POST['username'];
//     $email = $_POST['email'];
//     $password = $_POST['passd'];

//     $updatequery = mysqli_query($connection,"update students set username='$name', email='$email', password='$password' where id = '$id'");

//     if($updatequery){
//         echo "<script>
//           alert('your Data update successfully')
//            location.assign('show.php')
//           </script>";
//      }
// }

// // login form code 

// if(isset($_POST['login'])){
//   $useremail = $_POST['email'];
//   $userpassword = $_POST['userpassword'];
// $role="user";
//   $matchlogin = mysqli_query($connection,"select * from students where
//   email = '$useremail' && password = '$userpassword'");
  
//   //mysqli_num_rows
//   //The function mysqli_num_rows() 
//   //in PHP returns the number of rows in a result set from a SELECT query
//   if(mysqli_num_rows($matchlogin) > 0){
//     //mysqli_fetch_assoc
//     //It takes one row of data from your query and gives it to you as an associative array 
//     //(like a dictionary with column names as keys).
//     $data = mysqli_fetch_assoc($matchlogin);
//     if($data['role']=="admin"){
//       echo "welcome admin panel";
//     }
//     else{
//       echo "welcome user";
//     }
//   }
//   else{
//     echo"<script>
//     alert('your email and password is incorect please try again!')
//     location.assign('login.php')
//     </script>";
//   }
// }
// login form code 

if(isset($_POST['login'])){
  $useremail = $_POST['email'];
  $userpassword = $_POST['userpassword'];

  $matchlogin = mysqli_query($connection,"select * from employees where email='$useremail'AND password='$userpassword'");

  
  if(mysqli_num_rows($matchlogin)){
      $data=mysqli_fetch_assoc($matchlogin);
      
      if($data['role']=="employee"){
        $_SESSION['admin']=$data['name'];
        $_SESSION['user_id']=$data['id'];
        header('location:adminpanel/public.php?profile');
      }
      else{
        echo "script>
        alert('Try Again!')
        </script>";
      }

}
}
?>