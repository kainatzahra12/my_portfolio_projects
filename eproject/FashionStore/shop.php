<?php
include_once "header.php";
include "code.php";
?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <!-- <li>Category</li> -->
          </ol>
        </nav>
        <h1>Category</h1>
      </div>
    </div><!-- End Page Title -->

    <div class="container">
      <div class="row">

        <div class="col-lg-4 sidebar">

          <div class="widgets-container">
<!-- Product Categories Widget -->
<div class="product-categories-widget widget-item">

  <h3 class="widget-title">Categories</h3>

  <ul class="category-tree list-unstyled mb-0">
    <?php
    $fetchcat = mysqli_query($connection, "SELECT * FROM category");
    foreach ($fetchcat as $cat) {
      $cat_id = $cat['cat_id'];
    ?>
      <li class="category-item">
        <div class="d-flex justify-content-between align-items-center category-header collapsed" data-bs-toggle="collapse" data-bs-target="#subcategory<?php echo $cat_id; ?>" aria-expanded="false">
          <a href="javascript:void(0)" class="category-link"><?php echo $cat['cat_name'] ?></a>
          <span class="category-toggle">
            <i class="bi bi-chevron-down"></i>
            <i class="bi bi-chevron-up"></i>
          </span>
        </div>

        <!-- Subcategories -->
        <ul id="subcategory<?php echo $cat_id; ?>" class="subcategory-list list-unstyled collapse ps-3 mt-2">
          <?php
          $fetchsub = mysqli_query($connection, "SELECT * FROM subcategory WHERE category_id = $cat_id");
          foreach ($fetchsub as $sub) {
          ?>
            <li>
              <a href="shop.php?id=<?php echo $sub['sub_id']; ?>"  data-filter=".<?php echo $sub['sub_id'];?>" class="subcategory-link"><?php echo $sub['sub_title']; ?></a>
            </li>
          <?php } ?>
        </ul>
      </li>
    <?php } ?>
  </ul>
</div>

                 

                
            <!--/Product Categories Widget -->

            <!-- Pricing Range Widget -->
            
           
                 
           
          </div>

        </div>

        <div class="col-lg-8">

          <!-- Category Header Section -->
          <section id="category-header" class="category-header section">

            <div class="container" data-aos="fade-up">

              <!-- Filter and Sort Options -->
              <div class="filter-container mb-4" data-aos="fade-up" data-aos-delay="100">
               

                
              </div>

            </div>

          </section><!-- /Category Header Section -->

          <!-- Category Product List Section -->
          <section id="category-product-list" class="category-product-list section">
 
            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">
                <!-- Product 1 -->
<?php
if (isset($_GET['id']) ) {
  $mainsub = mysqli_query($connection, "SELECT * FROM products where prosub='".$_GET['id']."'");

  foreach ($mainsub as $subcategory) {
        ?>
    <div class="col-lg-6">
      <div class="product-box">
        <div class="product-thumb">
          <!-- <span class="product-label">New Season</span> -->
          <img src="assets/img/categories/<?php echo $subcategory['proimage']?>" alt="Product Image" class="main-img" loading="lazy">
          <div class="product-overlay">
            <div class="product-quick-actions">
              <!-- <button type="button" class="quick-action-btn"><i class="bi bi-heart"></i></button> -->
              <!-- <button type="button" class="quick-action-btn"><i class="bi bi-arrow-repeat"></i></button> -->
              <button type="button" class="quick-action-btn"><i class="bi bi-eye"></i></button>
            </div>
           <div class="add-to-cart-container">
            <form action="code.php" method="post">
              <input type="number" name="num-product" class="quantity-input" value="1" min="1" max="24">
              <input type="hidden" name="product_id" value="<?php echo $subcategory['proid']; ?>">

  <?php if (isset($_SESSION['user_id'])) { ?>
    <button type="submit" name="addcart"  class="add-to-cart-btn">Add to Cart</button>
  <?php } else { ?>
    <a href="login.php"><button type="button" class="add-to-cart-btn"> Login First</button></a>
  <?php } ?>
  </form>
</div>

          </div>
        </div>
        <div class="product-content">
          <div class="product-details">
            <h3 class="product-title"><a href="product-details.html"><?php echo $subcategory['prodetail']?></a></h3>
            <div class="product-price"><span>$<?php echo $subcategory['proprice']?></span></div>
          </div>
          <div class="product-rating-container">
            
          </div>
         
        </div>
      </div>
    </div>
    <?php
  } // end foreach
} // end if
?>
                <!-- End Product 1 -->






                <?php
if (isset($_GET['subcatid']) ) {
  $mainsub = mysqli_query($connection, "SELECT * FROM products where prosub='".$_GET['subcatid']."'");

  foreach ($mainsub as $subcategory) {
        ?>
    <div class="col-lg-6">
      <div class="product-box">
        <div class="product-thumb">
          <!-- <span class="product-label">New Season</span> -->
          <img src="assets/img/categories/<?php echo $subcategory['proimage']?>" alt="Product Image" class="main-img" loading="lazy">
          <div class="product-overlay">
            <div class="product-quick-actions">
              <!-- <button type="button" class="quick-action-btn"><i class="bi bi-heart"></i></button> -->
              <!-- <button type="button" class="quick-action-btn"><i class="bi bi-arrow-repeat"></i></button> -->
              <button type="button" class="quick-action-btn"><i class="bi bi-eye"></i></button>
            </div>
            <form action="code.php" method="post">
              <input type="number" name="num-product" class="quantity-input" value="1" min="1" max="24">
              <input type="hidden" name="product_id" value="<?php echo $subcategory['proid']; ?>">

            <div class="add-to-cart-container">
              <?php if (isset($_SESSION['user_id'])) { ?>
    <button type="submit" name="addcart" class="add-to-cart-btn">Add to Cart</button>
  <?php } else { ?>
    <a href="login.php"><button type="button" class="add-to-cart-btn"> Login First</button></a>
  <?php } ?>
            </div>
            </form>
          </div>
        </div>
        <div class="product-content">
          <div class="product-details">
            <h3 class="product-title"><a href="product-details.html"><?php echo $subcategory['prodetail']?></a></h3>
            <div class="product-price"><span>$<?php echo $subcategory['proprice']?></span></div>
          </div>
          <div class="product-rating-container">
            
          </div>
         
        </div>
      </div>
    </div>
    <?php
  } // end foreach
} // end if
?>
                <!-- End Product 1 -->


                 </div>

            </div>

          </section>
         

        </div>

      </div>
    </div>

  </main>
<?php  
include_once "footer.php";
?>
  
  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/drift-zoom/Drift.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>