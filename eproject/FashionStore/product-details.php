<?php
include_once "header.php";
include_once "code.php";
include_once "session.php";
?>

  <main class="main">
 
    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Product Details</li>
          </ol>
        </nav>
        <h1>Product Details</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Product Details Section -->
     <?php
		if(isset($_GET['id'])){
				$prodetail=mysqli_query($connection,"select * from products where proid='".$_GET['id']."'");
    $data=mysqli_fetch_assoc($prodetail);
?>
<form action="code.php" method="post">
  <input type="hidden" name="product_id" value="<?php echo $data['proid']; ?>">

<section id="product-details" class="product-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-5">
          <input type="hidden" name="provalue" value="<?php echo $_GET['id']?>">
          <!-- Product Images Column -->
          <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right" data-aos-delay="200">
            <div class="product-gallery">
              <!-- Vertical Thumbnails -->
              <div class="thumbnails-vertical">
                <div class="thumbnails-container">
                  <div class="thumbnail-item active" data-image="assets/img/categories/<?php echo$data ['proimage']?>">
                    <img src="assets/img/categories/<?php echo$data ['proimage']?>" alt="Product Thumbnail" class="img-fluid">
                  </div>
                  <!-- <div class="thumbnail-item" data-image="assets/img/product/product-details-2.webp">
                    <img src="assets/img/product/product-details-2.webp" alt="Product Thumbnail" class="img-fluid">
                  </div>
                  <div class="thumbnail-item" data-image="assets/img/product/product-details-3.webp">
                    <img src="assets/img/product/product-details-3.webp" alt="Product Thumbnail" class="img-fluid">
                  </div>
                  <div class="thumbnail-item" data-image="assets/img/product/product-details-4.webp">
                    <img src="assets/img/product/product-details-4.webp" alt="Product Thumbnail" class="img-fluid">
                  </div>
                  <div class="thumbnail-item" data-image="assets/img/product/product-details-5.webp">
                    <img src="assets/img/product/product-details-5.webp" alt="Product Thumbnail" class="img-fluid">
                  </div> -->
                </div>
              </div>

              <!-- Main Image -->
              <div class="main-image-wrapper">
                <div class="image-zoom-container">
                  <a href="assets/img/categories/<?php echo $data['proimage']?>" class="glightbox" data-gallery="product-gallery">
                    <img src="assets/img/categories/<?php echo $data['proimage']?>" alt="Product Image" class="img-fluid main-image drift-zoom" id="main-product-image" data-zoom="assets/img/categories/<?php echo $data['proimage']?>">
                    <div class="zoom-overlay">
                      <i class="bi bi-zoom-in"></i>
                    </div>
                  </a>
                </div>
                <div class="image-nav">
                  <!-- <button class="image-nav-btn prev-image">
                    <i class="bi bi-chevron-left"></i>
                  </button>
                  <button class="image-nav-btn next-image">
                    <i class="bi bi-chevron-right"></i>
                  </button> -->
                </div>
              </div>
            </div>
          </div>

          <!-- Product Info Column -->
          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
            <div class="product-info-wrapper" id="product-info-sticky">
              <!-- Product Meta -->
              <div class="product-meta">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <span class="product-category"><?php echo $data['proname']?></span>
                  <!-- <div class="product-share">
                    <button class="share-btn" aria-label="Share product">
                      <i class="bi bi-share"></i>
                    </button> -->
                    <!-- <div class="share-dropdown">
                      <a href="#" aria-label="Share on Facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" aria-label="Share on Twitter"><i class="bi bi-twitter-x"></i></a>
                      <a href="#" aria-label="Share on Pinterest"><i class="bi bi-pinterest"></i></a>
                      <a href="#" aria-label="Share via Email"><i class="bi bi-envelope"></i></a>
                    </div> -->
                  </div>
                </div>

                <h1 class="product-title"><?php echo $data['prodetail']?></h1>


              <!-- Product Price -->
              <div class="product-price-container">
                <div class="price-wrapper">
                  <span class="current-price">$<?php echo $data['proprice']?></span>
                  <!-- <span class="original-price">$299.99</span> -->
                </div>
                 <!-- Product Price -->
              <div class="product-price-container">
                <div class="price-wrapper">
                  <span class="current-price">code:<?php echo $data['p_id']?></span>
                  <!-- <span class="original-price">$299.99</span> -->
                </div>
                <!-- <span class="discount-badge">Save 17%</span> -->
                <div class="stock-info">
                  <i class="bi bi-check-circle-fill"></i>
                  <span>In Stock</span>
                  <span class="stock-count">(24 items left)</span>
                </div>
              </div>

              <!-- Product Description -->
              <!-- <div class="product-short-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum at lacus congue, suscipit elit nec, tincidunt orci. Phasellus egestas nisi vitae lectus imperdiet venenatis.</p>
              </div> -->

              <!-- Product Options -->
              <div class="product-options">
                

                <!-- Quantity Selector -->
<div class="option-group">
  <h6 class="option-title">Quantity</h6>
  <div class="quantity-selector">
    <button type="button" class="quantity-btn decrease">
      <i class="bi bi-dash"></i>
    </button>

    <input type="number" name="num-product" class="quantity-input"  value="1" min="1" max="24">

    <button type="button" class="quantity-btn increase">
      <i class="bi bi-plus"></i>
    </button>
  </div>
</div>


              <!-- Action Buttons -->
              <div class="product-actions">
                
                 <?php
								 if(isset($_SESSION['user_id'])){
									?>
                <button class="btn btn-primary add-to-cart-btn"type="submit" name="addcart" >
                  <i class="bi bi-cart-plus" ></i> Add to Cart
                </button>

                <?php
								 }
								 else{
									?>
                    <a href="login.php" class="btn btn-primary add-to-cart-btn">
                  <i class="bi bi-box-arrow-in-right"></i> Login First
                </a>
                 <?php
									
								 }
								
								 ?>
                <!-- <button class="btn btn-outline-primary buy-now-btn">
                  <i class="bi bi-lightning-fill"></i> Buy Now
                </button> -->
                <!-- <button class="btn btn-outline-secondary wishlist-btn" aria-label="Add to wishlist">
                  <i class="bi bi-heart"></i>
                </button> -->
              </div>

              <!-- Delivery Options -->
              <!-- <div class="delivery-options">
                <div class="delivery-option">
                  <i class="bi bi-truck"></i>
                  <div>
                    <h6>Free Shipping</h6>
                    <p>On orders over $50</p>
                  </div>
                </div>
                <div class="delivery-option">
                  <i class="bi bi-arrow-repeat"></i>
                  <div>
                    <h6>30-Day Returns</h6>
                    <p>Hassle-free returns</p>
                  </div>
                </div>
                <div class="delivery-option">
                  <i class="bi bi-shield-check"></i>
                  <div>
                    <h6>2-Year Warranty</h6>
                    <p>Full coverage</p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>
    </form>

<?php
}
?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Product Details Section -->

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