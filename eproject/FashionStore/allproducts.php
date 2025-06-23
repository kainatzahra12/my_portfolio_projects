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
            <!-- <li class="current">Category</li> -->
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
      
    ?>
      <li class="category-item">
        <div class="d-flex justify-content-between align-items-center category-header collapsed" >
          <a href="category.php?catid=<?php echo $cat['cat_id']; ?>" class="category-link"><?php echo $cat['cat_name'] ?></a>
          <!-- <span class="category-toggle">
            <i class="bi bi-chevron-down"></i>
            <i class="bi bi-chevron-up"></i>
          </span> -->
        </div>
 <?php } ?>
        <!-- Subcategories -->
       
</div>

                 

                
           

          </div>

        </div>

                
            <!--/Product Categories Widget -->

            <!-- Pricing Range Widget -->
            
           
                 
           
          <!-- </div>

        </div> -->

        <div class="col-lg-8">

          <!-- Category Header Section -->
          <section id="category-header" class="category-header section">

            <div class="container" data-aos="fade-up">

              <!-- Filter and Sort Options -->
              <div class="filter-container mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="row g-3">
                  <div class="col-12 col-md-6 col-lg-4">
                    <div class="filter-item search-form">
                      <label for="productSearch" class="form-label">Search Products</label>
                      <div class="input-group">
                        <input type="text" class="form-control" id="productSearch" placeholder="Search for products..." aria-label="Search for products">
                        <button class="btn search-btn" type="button">
                          <i class="bi bi-search"></i>
                        </button>
                      </div>
                    </div>
                  </div>

                 
                </div>

                
              </div>

            </div>

          </section><!-- /Category Header Section -->

          <!-- Category Product List Section -->
          <section id="category-product-list" class="category-product-list section">
 
            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">
                <!-- Product 1 -->
<?php
if (isset($_GET['all']) && $_GET['all'] == '1') {
  $mainsub = mysqli_query($connection, "SELECT * FROM products");

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
              <button type="button" class="add-to-cart-btn">Add to Cart</button>
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