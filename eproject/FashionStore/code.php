<?php
$connection=mysqli_connect("localhost","root","","e_project");
if(isset($_POST['add_cat'])){
    $catname=$_POST['cat_name'];
     $catdetail=$_POST['category_detail'];

    $filename=$_FILES['fileupload']['name'];
    $filesize=$_FILES['fileupload']['size'];
    $filetemp=$_FILES['fileupload']['tmp_name'];
    $filetype=pathinfo($filename,PATHINFO_EXTENSION);
    $connection=mysqli_connect("localhost","root","","e_project");

    $destination="assets/img/categories/".$filename;
    if($filesize <= 2000000){
        if ($filetype=='jpg'|| $filetype=='jpeg'|| $filetype=='png') {
            if(move_uploaded_file($filetemp,$destination)){
                $insertquery=mysqli_query($connection,"insert into category(cat_name,cat_detail,cat_image)
                values('$catname','$catdetail','$filename')");

                if($insertquery){
                    echo"<script>
        alert ('data inserted successfully');
        //  header('location:header.php');
        location.assign('adminpanel/public.php?addcategory');
        </script>";
    }
}
    else{
        echo"<script>
        alert ('data not inserted try again');
        //  header('location:header.php');
        location.assign('adminpanel/public.php?addcategory');
        </script>";
    }
                 
      }      else{
                    echo"<script>
                    alert ('file type should be jpg, jpeg or png');
                    //  header('location:header.php');
                    location.assign('adminpanel/public.php?addcategory');
                    </script>";
                }

            
        }
        else{
            echo"<script>
            alert ('file should be 2MB or less than  2MB');
            //  header('header.php?addcategory');
           location.assign('adminpanel/public.php?addcategory');
            </script>";
        }
    }

if(isset($_POST['add_subcat'])){
    $cid = $_POST['c_id'];
    $subname = $_POST['subcat_name'];
    // $subdetail = $_POST['subcat_detail'];

    // $filename=$_FILES['fileupload']['name'];
    // $filesize=$_FILES['fileupload']['size'];
    // $filetemp=$_FILES['fileupload']['tmp_name'];
    // $filetype=pathinfo($filename,PATHINFO_EXTENSION);
    $connection=mysqli_connect("localhost","root","","e_project");

    // $destination="assets/img/categories/".$filename;
    // if($filesize <= 2000000){
    //     if ($filetype=='jpg'|| $filetype=='jpeg'|| $filetype=='png') {
    //         if(move_uploaded_file($filetemp,$destination)){
                $insertquery=mysqli_query($connection,"insert into subcategory(sub_title,category_id)
                values('$subname','$cid')");

                if($insertquery){
                    echo"<script>
        alert ('data inserted successfully');
        //  header('location:header.php');
        location.assign('adminpanel/public.php?addcategory');
        </script>";
    }
}
    


// add arrival

if(isset($_POST['add_arrival'])){
    $newname=$_POST['p_name'];
    $newprice=$_POST['p_price'];
    $cat=$_POST['c_id'];
    $arritag=$_POST['arritag'];
    $arrivdesc=$_POST['arrivdesc'];
    $filename=$_FILES['fileupload']['name'];
    $filesize=$_FILES['fileupload']['size'];
    $filetemp=$_FILES['fileupload']['tmp_name'];
    $filetype=pathinfo($filename,PATHINFO_EXTENSION);
     $destination="assets/img/categories/".$filename;
    if($filesize <= 2000000){
        if ($filetype=='jpg'|| $filetype=='jpeg'|| $filetype=='png') {
            if(move_uploaded_file($filetemp,$destination)){
                $insertquery=mysqli_query($connection,"insert into newarrival(arrivname,arrivprice,arrivimg,arrcat,maintag,descip)
                values('$newname','$newprice','$filename','$cat','$arritag','$arrivdesc')");

                if($insertquery){
                    echo"<script>
        alert ('data inserted successfully');
        //  header('location:header.php');
        location.assign('adminpanel/public.php?newarrival');
        </script>";
    }
}
    else{
        echo"<script>
        alert ('data not inserted try again');
        //  header('location:header.php');
         location.assign('adminpanel/public.php?newarrival');
        </script>";
    }
                 
      }      else{
                    echo"<script>
                    alert ('file type should be jpg, jpeg or png');
                    //  header('location:header.php');
                     location.assign('adminpanel/public.php?newarrival');
                    </script>";
                }

            
        }
        else{
            echo"<script>
            alert ('file should be 2MB or less than  2MB');
            //  header('header.php?newarrival');
            location.assign('adminpanel/public.php?newarrival');
            </script>";
        }
 


}
// delete
if(isset($_POST['deletecat'])){
    $id=$_POST['deleteid'];

    $deletequery=mysqli_query($connection,"delete from category where cat_id='$id'");

    if($deletequery){
        echo"<script>
        alert ('data deleted successfully');
        location.assign('header.php?viewnewarrivals');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
        // location.assign('header.php?viewnewarrivals');
        </script>";
    }
}
if(isset($_POST['deletearriv'])){
    $id=$_POST['deleteid'];

    $deletequery=mysqli_query($connection,"delete from newarrival where id='$id'");

    if($deletequery){
        echo"<script>
        alert ('data deleted successfully');
        location.assign('header.php?viewnewarrivals');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
        // location.assign('header.php?viewcategory');
        </script>";
    }
}

if(isset($_POST['deletefeatured'])){
    $id=$_POST['deleteid'];

    $deletequery=mysqli_query($connection,"delete from featured where id='$id'");

    if($deletequery){
        echo"<script>
        alert ('data deleted successfully');
        location.assign('header.php?newfeatured');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
        // location.assign('header.php?newfeatured');
        </script>";
    }
}
if(isset($_POST['deletepro'])){
    $id=$_POST['deleteid'];

    $deletequery=mysqli_query($connection,"delete from products where proid='$id'");

    if($deletequery){
        echo"<script>
        alert ('data deleted successfully');
        location.assign('header.php?viewproducts');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
        // location.assign('header.php?viewproducts');
        </script>";
    }
}
if(isset($_POST['deletebest'])){
    $id=$_POST['deleteid'];

    $deletequery=mysqli_query($connection,"delete from demandingpro where demid='$id'");

    if($deletequery){
        echo"<script>
        alert ('data deleted successfully');
        location.assign('header.php?viewbestseller');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
        // location.assign('header.php?viewbestseller');
        </script>";
    }
}
if(isset($_POST['delete_e'])){
    $id=$_POST['deleteid'];

    $deletequery=mysqli_query($connection,"delete from employees where id='$id'");

    if($deletequery){
        echo"<script>
        alert ('data deleted successfully');
        location.assign('header.php?viewemployees');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
        // location.assign('header.php?viewemployees');
        </script>";
    }
}

if(isset($_POST['addemployee'])){
    $name=$_POST['e_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $insertquery=mysqli_query($connection,"insert into employees(name,email,password)values('$name','$email','$password')");

    if($insertquery){
        echo"<script>
        alert ('data inserted successfully');
        location.assign('adminpanel/public.php?addemployee');
        </script>";
    }
}

if(isset($_POST['update_e'])){
    $idchange=$_POST['idchange'];
    $namechange=$_POST['namechange'];
    $emailchange=$_POST['emailchange'];
    $passchange=$_POST['passchange'];
    $updatequery=mysqli_query($connection,"update  employees set name='$namechange',email='$emailchange',password='$passchange' where id='$idchange'");

    if($updatequery){
        echo"<script>
        alert ('data updated successfully');
        //  header('location:header.php?viewemployees');
        location.assign('header.php?viewemployees');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
         location.assign('header.php?viewemployees');
        </script>";
    }
}


if(isset($_POST['add_featured'])){
     $filename=$_FILES['fileupload']['name'];
    $filesize=$_FILES['fileupload']['size'];
    $filetemp=$_FILES['fileupload']['tmp_name'];
    $filetype=pathinfo($filename,PATHINFO_EXTENSION);
     $destination="assets/img/categories/".$filename;
    if($filesize <= 2000000){
        if ($filetype=='jpg'|| $filetype=='jpeg'|| $filetype=='png') {
            if(move_uploaded_file($filetemp,$destination)){
                $insertquery=mysqli_query($connection,"insert into featured(f_image)
                values('$filename')");

                if($insertquery){
                    echo"<script>
        alert ('data inserted successfully');
        //  header('location:header.php');
        location.assign('adminpanel/public.php?newarrival');
        </script>";
    }
}
    else{
        echo"<script>
        alert ('data not inserted try again');
        //  header('location:header.php');
         location.assign('adminpanel/public.php?newarrival');
        </script>";
    }
                 
      }      else{
                    echo"<script>
                    alert ('file type should be jpg, jpeg or png');
                    //  header('location:header.php');
                     location.assign('adminpanel/public.php?newarrival');
                    </script>";
                }

            
        }
        else{
            echo"<script>
            alert ('file should be 2MB or less than  2MB');
            //  header('header.php?newarrival');
            location.assign('adminpanel/public.php?newarrival');
            </script>";
        }
 

}

 // ADD PRODUCT CODE

    if(isset($_POST['add_product'])){
        $pname=$_POST['p_name'];
        $pdesc=$_POST['p_detail'];
         $pprice=$_POST['p_price'];
        $catid=$_POST['c_id'];
        
        $get_main = mysqli_query($connection, "SELECT category_id FROM subcategory WHERE sub_id = '$catid'");
$row = mysqli_fetch_assoc($get_main);
$mainid = $row['category_id'];  // now you have the main category ID

        $filename=$_FILES['p_image']['name'];
        $filesize=$_FILES['p_image']['size'];
        $filetemp=$_FILES['p_image']['tmp_name'];
        $filetype=pathinfo($filename,PATHINFO_EXTENSION);
    
        $destination="assets/img/categories/".$filename;
        if($filesize <= 2000000){
            if ($filetype=='jpg'|| $filetype=='jpeg'|| $filetype=='png') {
                if(move_uploaded_file($filetemp,$destination)){
                  $insertquery = mysqli_query($connection, "INSERT INTO products 
    (proname, prodetail, proprice, prosub, procat, proimage) 
    VALUES ('$pname', '$pdesc', '$pprice', '$catid', '$mainid', '$filename')");
                    if($insertquery){
                        echo"<script>
            alert ('data inserted successfully');
            location.assign('adminpanel/public.php?addproduct');
            </script>";
        }
    }
        else{
            echo"<script>
            alert ('data not inserted try again');
            //  header('location:header.php');
            location.assign('adminpanel/public.php?addproduct');
            </script>";
        }
                     
          }      else{
                        echo"<script>
                        alert ('file type should be jpg, jpeg or png');
                        //  header('location:header.php');
                        location.assign('adminpanel/public.php?addproduct');
                        </script>";
                    }
    
                
            }
            else{
                echo"<script>
                alert ('file should be 2MB or less than  2MB');
                //  header('header.php?addcategory');
                location.assign('adminpanel/public.php?addproduct');
                </script>";
            }
        }
    

// best sellers


 if(isset($_POST['add_sellers'])){
        $pname=$_POST['p_name'];
        $pdesc=$_POST['p_detail'];
         $pprice=$_POST['p_price'];
        $catid=$_POST['c_id'];
    
        $filename=$_FILES['p_image']['name'];
        $filesize=$_FILES['p_image']['size'];
        $filetemp=$_FILES['p_image']['tmp_name'];
        $filetype=pathinfo($filename,PATHINFO_EXTENSION);
    
        $destination="assets/img/categories/".$filename;
        if($filesize <= 2000000){
            if ($filetype=='jpg'|| $filetype=='jpeg'|| $filetype=='png') {
                if(move_uploaded_file($filetemp,$destination)){
                    $insertquery=mysqli_query($connection,"insert into demandingpro(demname,demdetail,demprice,bestsub,demimg)
                    values('$pname','$pdesc','$pprice','$catid','$filename')");
    
                    if($insertquery){
                        echo"<script>
            alert ('data inserted successfully');
            location.assign('adminpanel/public.php?demandingpro');
            </script>";
        }
    }
        else{
            echo"<script>
            alert ('data not inserted try again');
            //  header('location:header.php');
            location.assign('adminpanel/public.php?demandingpro');
            </script>";
        }
                     
          }      else{
                        echo"<script>
                        alert ('file type should be jpg, jpeg or png');
                        //  header('location:header.php');
                        location.assign('adminpanel/public.php?demandingpro');
                        </script>";
                    }
    
                
            }
            else{
                echo"<script>
                alert ('file should be 2MB or less than  2MB');
                //  header('header.php?addcategory');
                location.assign('adminpanel/public.php?demandingpro');
                </script>";
            }
        }


        // update code


if(isset($_POST['update'])){
    $idchange=$_POST['idchange'];
    $namechange=$_POST['namechange'];
    $emailchange=$_POST['emailchange'];
    $passchange=$_POST['passchange'];
    $updatequery=mysqli_query($connection,"update  registers set name='$namechange',email='$emailchange',password='$passchange' where id='$idchange'");

    if($updatequery){
        echo"<script>
        alert ('data updated successfully');
        //  header('location:header.php?index');
        location.assign('header.php?index');
        </script>";
    }
    else{
        echo"<script>
        alert ('please try again');
         location.assign('header.php?index');
        </script>";
    }
}
if (isset($_POST['delete'])) {
    $id = $_POST['deleteid'];

    // OPTIONAL: Sanitize the input
    $id = mysqli_real_escape_string($connection, $id);

    $deletequery = mysqli_query($connection, "DELETE FROM registers WHERE id = '$id'");

    if ($deletequery) {
        echo "<script>
            alert('Data deleted successfully');
            location.assign('header.php?index');
        </script>";
    } else {
        echo "<script>
            alert('Please try again');
            location.assign('header.php?index');
        </script>";
    }
}

   
 // register
   include "session.php";

if(isset($_POST['register'])){
 $name=$_POST['firstName'];
 $email=$_POST['email'];
 $password=$_POST['password'];

 
 $registerquery=mysqli_query($connection,"insert into registers(name,email,PASSWORD)values('$name','$email','$password')");

 if($registerquery){
   $_SESSION['success']='Account Created Successfully';
   header('location:register.php');
 }
}

// login

// include_once "session.php";
if(isset($_POST['login'])){
   
    $email=$_POST['useremail'];
    $password=$_POST['userpass'];

   
    $loginquery=mysqli_query($connection,"select * from registers where email='$email'AND PASSWORD='$password'");

    if(mysqli_num_rows($loginquery)){
      $data=mysqli_fetch_assoc($loginquery);
      if($data['role']=="Admin"){
        $_SESSION['Admin']=$data['name'];
        header('location:adminpanel/public.php?index');
      }
      else if($data['role']=="user"){
       $_SESSION['user_id'] = $data['id'];
header('Location: index.php');
      }
    } else{
        echo 'try again';
    }


}



// add to cart

if(isset($_POST['addcart'])){
    $user_id = $_SESSION['user_id'];
    $pro_id = $_POST['product_id'];
    $pro_qty = $_POST['num-product'];
    // $pro_price = $_POST['product_price'];

    // Insert query (remove comment here)
    $addtocart = mysqli_query($connection, "INSERT INTO add_to_cart (user_id, product_id, product_qty) VALUES ('$user_id', '$pro_id', '$pro_qty')");

    if($addtocart){
        $_SESSION['success'] = "Item added to the cart successfully!";
        header('Location: cart.php');
        exit(); // Very important to stop the script after header
    } 
    else {
        $_SESSION['success'] = "Something went wrong. Please try again.";
        header('Location: cart.php');
        exit(); // Very important to stop the script after header
    }
}


if (isset($_POST['delete_cart'])) {
    $cart_id = $_POST['delete_cart_id'];
    $delete = mysqli_query($connection, "DELETE FROM add_to_cart WHERE cart_id = '$cart_id'");

    if ($delete) {
        $_SESSION['dlt'] = "Item deleted from the cart successfully.";
    } else {
        $_SESSION['dlt'] = "Failed to remove item. Please try again.";
    }

    // Redirect back to previous page
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit(); // Always use exit after header to stop script
}



if (isset($_POST['clear_cart'])) {
    $user_id = $_SESSION['user_id'];

    $clear = mysqli_query($connection, "DELETE FROM add_to_cart WHERE user_id = '$user_id'");

    if ($clear) {
        $_SESSION['success'] = "Cart cleared successfully!";
    } else {
        $_SESSION['success'] = "Failed to clear cart. Please try again.";
    }

    header('Location: cart.php');
    exit();
}


 



// session_start();
// checkout and final place order

// checkout form data


if (isset($_POST['customer'])) {
    $first_name = $_POST['firstname'];
    $last_name  = $_POST['lastname'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $shipping_address = $_POST['address'];
    $shipping_city = $_POST['city'];
    $payment_method = $_POST['payment'];
    $user_data  = $_SESSION['user_id'];
    $total_amount = $_SESSION['cart_total'];

    // Insert customer order info
    $sql = mysqli_query($connection, 
        "INSERT INTO place_order (place_firstName, place_lastName, place_email, place_number, place_address, place_city, place_payment, customer_id) 
         VALUES ('$first_name','$last_name','$email','$phone','$shipping_address','$shipping_city','$payment_method','$user_data')"
    );

    if ($sql) {
        // Fetch cart items
        $cart_query = mysqli_query($connection, 
            "SELECT * FROM add_to_cart WHERE user_id = '$user_data'"
        );

        $all_inserted = true; // Flag to track success of all inserts

        foreach ($cart_query as $data) {
            $product_id = $data['product_id'];
            $quantity = $data['product_qty'];

            $insert_order = mysqli_query($connection, 
                "INSERT INTO ordersfinal (users_id, pro_id, pro_qty,total_amount) 
                 VALUES ('$user_data', '$product_id', '$quantity','$total_amount')"
            );

            if (!$insert_order) {
                $all_inserted = false;
                break;
            }
        }

        // If all inserts were successful
        if ($all_inserted) {
            // Clear cart
            $delete_cart = mysqli_query($connection, 
                "DELETE FROM add_to_cart WHERE user_id = '$user_data'"
            );

            echo "<script>
                    alert('Thank you for your order. The order has been placed!');
                    location.assign('index.php');
                  </script>";
        } else {
            echo "<script>
                    alert('Something went wrong while saving your order items. Please try again.');
                    location.assign('checkout.php');
                  </script>";
        }

    } else {
        echo "<script>
                alert('Failed to save order info. Please try again.');
                location.assign('checkout.php');
              </script>";
    }
}



$connection =mysqli_connect("localhost","root","","e_project");

// session_start();

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





?>





 
              