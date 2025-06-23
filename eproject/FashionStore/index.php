<?php

include_once "header.php";
include_once "code.php";

?>

  <main class="main">

    <!-- Hero Section -->
    <section class="ecommerce-hero-2 hero section" id="hero">
      <div class="container">
        <div class="hero-slider swiper init-swiper" data-aos="fade-up">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "effect": "fade",
              "fadeEffect": {
                "crossFade": true
              },
              "navigation": {
                "nextEl": ".swiper-button-next",
                "prevEl": ".swiper-button-prev"
              }
            }
          </script>

          <div class="swiper-wrapper">
                
            <!-- New Collection Slide -->
            <div class="swiper-slide slide-new">
              <div class="row align-items-center">
                <div class="col-lg-6 content-col" data-aos="fade-right" data-aos-delay="100">
                 
<div class="slide-content">
                    <span class="slide-badge">New Arrivals</span>
                    <h1>Discover Our <span>Latest</span> Collection</h1>
                    <p>Discover the latest additions to our collection. Fresh styles, trending picks, and just-in items you won’t want to miss!

</p>
                    <div class="slide-cta">
                      <a href="#" class="btn btn-shop">Shop New Arrivals <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 image-col" 
                data-aos="fade-left" data-aos-delay="200"
                >
                  <div class="product-showcase">
                    <div class="product-grid">
                       <?php
                  $fetch=mysqli_query($connection,"select * from newarrival");
                  foreach($fetch as $newarriv){
                    ?>
            

                      <div class="product-item" data-aos="fade-up" data-aos-delay="300">
                        <div class="product-image">
                          <img src="assets/img/categories/<?php echo $newarriv['arrivimg']?>" alt="New Product 1">
                        </div>
                        <div class="product-info">
                          <h4><?php echo $newarriv['arrivname']?></h4>
                          <span class="price">$<?php echo $newarriv['arrivprice']?></span>
                        </div>
                      </div>
                  <?php
                 
            
             }
                ?> 
                    </div>
                  </div>
                </div>
              </div>
              </div>
              

           
            <!-- Featured Products Slide -->
            <div class="swiper-slide slide-featured">
              <div class="row align-items-center">
                <div class="col-lg-6 content-col" data-aos="fade-right" data-aos-delay="100">
                  <div class="slide-content">
                    <span class="slide-badge">Featured Collection</span>
                    <h1>Premium <span>Quality</span> Products</h1>
                    <p>Step up your style with standout picks from our Featured Collection.
Trendy, versatile, and made to turn heads—everyday fashion, elevated.</p>
                    <div class="slide-cta">
                      <a href="#" class="btn btn-shop">Explore Collection <i class="bi bi-arrow-right"></i></a>
                    </div>
                    <div class="feature-list">
                      <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Premium Materials</span>
                      </div>
                      <div class="feature-item">
                        <i class="bi bi-check-circle-fill"></i>
                        <span>Handcrafted Quality</span>
                      </div>
                      
                    </div>
                  </div>
                </div>

                <div class="col-lg-6 image-col" data-aos="fade-left" data-aos-delay="200">
                  <div class="featured-showcase">
                    <div class="featured-image">
                      <?php
                      $fetchfeature=mysqli_query($connection,"select * from featured");
                      foreach($fetchfeature as $featured){
                        ?>
                               <img src="assets/img/categories/<?php echo $featured['f_image']?>" alt="Featured Product">
                               <?php
                      }
                      ?>
                     
                      <!-- <div class="featured-badge">
                        <i class="bi bi-star-fill"></i>
                        <span>Featured</span>
                      </div> -->
                    </div>
                    <!-- <div class="floating-review" data-aos="fade-up" data-aos-delay="300">
                      <div class="review-stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <div class="review-text">
                        "Exceptional quality and design"
                      </div>
                      <div class="review-author">
                        - Satisfied Customer
                      </div>
                    </div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      
    </section><!-- /Hero Section -->

    <!-- Promo Cards Section -->
    <section id="promo-cards" class="promo-cards section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-4">
          <h1 class="text-center">Main Categories</h1>
          <?php
          $cates=mysqli_query($connection,"select * from category");
          foreach($cates as $datafetch){
            ?>
    <!-- Promo Card 1 -->
          <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
            <div class="promo-card card-3" >
              <div class="promo-content">
                <!-- <p class="small-text">Etiam vel augue</p> -->
                <h3 class="promo-title"><?php echo $datafetch['cat_name']?></h3>
                <p class="promo-description"><?php echo $datafetch['cat_detail']?></p>
                <!-- <a href="category.php?id=<?php echo $datafetch['cat_id']; ?>" class="btn-shop">Shop Now</a> -->
              </div>
              <div class="promo-image">
                <img src="assets/img/categories/<?php echo $datafetch['cat_image']?>"  alt="Product" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
              </div>
            </div>
          </div>


            <?php
          }
          ?>
         
                </div>

      </div>

    </section><!-- /Promo Cards Section -->

   
    <!-- Best Sellers Section -->
    <section id="best-sellers" class="best-sellers section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Best Sellers</h2>
        <p>"Discover our most popular products — top-rated and trending with customers this season!"</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
         <!-- <div class="row product-container isotope-container" data-aos="fade-up" data-aos-delay="200"> -->


        <div class="row g-4">
          <!-- Product 2 -->
            <?php
           $seller=mysqli_query($connection,"select * from demandingpro");
           foreach($seller as $demand){
            ?>
          <div class="col-6 col-lg-3">
            <div class="product-card" data-aos="zoom-in" data-aos-delay="100">
              <div class="product-image">
                <img src="assets/img/categories/<?php echo $demand['demimg']?>" class="main-image img-fluid" alt="Product">
                <img src="assets/img/categories/<?php echo $demand['demimg']?>" class="hover-image img-fluid" alt="Product Variant">
                <div class="product-overlay">
                  <div class="product-actions">
                   <a href="demand.php?id=<?php echo $demand['demid']?>"><button type="button" class="action-btn" data-bs-toggle="tooltip" title="Quick View">
                      <i class="bi bi-eye"></i>
                    </button></a> 
                    <form action="code.php" method="post">
              <input type="number" name="num-product" class="quantity-input" value="1" min="1" max="24">
              <input type="hidden" name="product_id" value="<?php echo $demand['product_id']; ?>">

                     <?php
									if(isset($_SESSION['user_id'])){
										?>
                    <button type="submit" name="addcart" class="action-btn" data-bs-toggle="tooltip" title="Add to Cart">
                      <i class="bi bi-cart-plus">

                      </i>
                       <?php
									}
									else{
										?>
                   <a href="login.php"> <button type="button" class="action-btn" data-bs-toggle="tooltip" title="Login First">
                     <i class="bi bi-box-arrow-in-right"></i>
                    </button></a>
<?php
									}
									?>
    </form>
                  </div>
                </div>
                <!-- <div class="product-badge new">New</div> -->
              </div>
              <div class="product-details">
                <div class="product-category"><?php echo $demand['demname']?></div>
                <h4 class="product-title"><a href="product-details.html"><?php echo $demand['demdetail']?></a></h4>
                <div class="product-meta">
                  <div class="product-price">$<?php echo $demand['demprice']?></div>
                  <!-- <div class="product-rating">
                    <i class="bi bi-star-fill"></i>
                    4.6 <span>(28)</span>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
<?php

}
?>
         
        </div>

      </div>

    </section><!-- /Best Sellers Section -->



    <!-- Product List Section -->
    <section id="product-list" class="product-list section">

      <div class="container isotope-layout" data-aos="fade-up" data-aos-delay="100" data-default-filter="*" data-layout="masonry" data-sort="original-order">

        
         
    <div class="row">
    <div class="col-12">
            <div class="product-filters isotope-filters mb-5 d-flex justify-content-center" data-aos="fade-up">
              <ul class="d-flex flex-wrap gap-2 list-unstyled">
                <li class="filter-active" data-filter="*">All</li>
                 <?php
          $procat=mysqli_query($connection,"select * from category");
   foreach($procat as $fethcat){
  
           echo '<li data-filter=".cat-' . $fethcat['cat_id'] . '">' . $fethcat['cat_name'] . '</li>';

                
   }

          ?>
               
              </ul>
            </div>
          </div>
</div>
   
          
        

        <div class="row product-container isotope-container" data-aos="fade-up" data-aos-delay="200">

          <!-- Product Item 1 -->
   <?php
  // $limit = 8;
$productdata = mysqli_query($connection, "select * from products 
");


foreach ($productdata as $proOutput) {
?>



<div class="col-md-6 col-lg-3 product-item isotope-item cat-<?php echo $proOutput['c_pro']; ?>">
        <div class="product-card">
            <div class="product-image">
                <img src="assets/img/categories/<?php echo $proOutput['proimage']; ?>" alt="Product" class="img-fluid main-img">
                <img src="assets/img/categories/<?php echo $proOutput['proimage']; ?>" alt="Product Hover" class="img-fluid hover-img">
                <div class="product-overlay">
                   <form action="code.php" method="post">
              <input type="hidden" name="num-product" class="quantity-input" value="1" min="1" max="24">
              <input type="hidden" name="product_id" value="<?php echo $proOutput['proid']; ?>">

                 <?php if (isset($_SESSION['user_id'])) { ?>
  <button type="submit" name="addcart" class="btn-cart">
    <i class="bi bi-cart-plus"></i> Add to Cart
  </button>
<?php } else { ?>
  <a href="login.php" class="btn-cart">
    <i class="bi bi-box-arrow-in-right"></i> Login First
  </a>
<?php } ?>

                    <div class="product-actions">
                        <a href="#" class="action-btn"><i class="bi bi-heart"></i></a>
                        <a href="product-details.php?id=<?php echo $proOutput['proid']; ?>" class="action-btn"><i class="bi bi-eye"></i></a>
                    </div>
                </div>
            </div>
            </form>
            <div class="product-info">
                <h5 class="product-title"><a href="product-details.php?id=<?php echo $proOutput['proid']; ?>"><?php echo $proOutput['prodetail']; ?></a></h5>
                <div class="product-price">
                    <span class="current-price">$<?php echo $proOutput['proprice']; ?></span>
                </div>
                <!-- <div class="product-rating">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-half"></i>
                    <span>(24)</span>
                </div> -->
            </div>
              
        </div>
    </div>
<?php
}
?>        
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
         <a href="allproducts.php?all=1" class="view-all-btn">View All Products <i class="bi bi-arrow-right"></i></a>

        </div>

      </div>

    </section><!-- /Product List Section -->

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