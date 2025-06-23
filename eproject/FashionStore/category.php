<?php
include_once "header.php";
include_once "code.php";
?>

  <main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container">
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Category</li>
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

                  <!-- <div class="col-12 col-md-6 col-lg-2">
                    <div class="filter-item">
                      <label for="priceRange" class="form-label">Price Range</label>
                      <select class="form-select" id="priceRange">
                        <option selected="">All Prices</option>
                        <option>Under $25</option>
                        <option>$25 to $50</option>
                        <option>$50 to $100</option>
                        <option>$100 to $200</option>
                        <option>$200 &amp; Above</option>
                      </select>
                    </div>
                  </div> -->

                  <!-- <div class="col-12 col-md-6 col-lg-2">
                    <div class="filter-item">
                      <label for="sortBy" class="form-label">Sort By</label>
                      <select class="form-select" id="sortBy">
                        <option selected="">Featured</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Customer Rating</option>
                        <option>Newest Arrivals</option>
                      </select>
                    </div>
                  </div> -->

                  <!-- <div class="col-12 col-md-6 col-lg-4">
                    <div class="filter-item">
                      <label class="form-label">View</label>
                      <div class="d-flex align-items-center">
                        <div class="view-options me-3">
                          <button type="button" class="btn view-btn active" data-view="grid" aria-label="Grid view">
                            <i class="bi bi-grid-3x3-gap-fill"></i>
                          </button>
                          <button type="button" class="btn view-btn" data-view="list" aria-label="List view">
                            <i class="bi bi-list-ul"></i>
                          </button>
                        </div>
                        <div class="items-per-page">
                          <select class="form-select" id="itemsPerPage" aria-label="Items per page">
                            <option value="12">12 per page</option>
                            <option value="24">24 per page</option>
                            <option value="48">48 per page</option>
                            <option value="96">96 per page</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>

                <!-- <div class="row mt-3">
                  <div class="col-12" data-aos="fade-up" data-aos-delay="200">
                    <div class="active-filters">
                      <span class="active-filter-label">Active Filters:</span>
                      <div class="filter-tags">
                        <span class="filter-tag">
                          Electronics <button class="filter-remove"><i class="bi bi-x"></i></button>
                        </span>
                        <span class="filter-tag">
                          $50 to $100 <button class="filter-remove"><i class="bi bi-x"></i></button>
                        </span>
                        <button class="clear-all-btn">Clear All</button>
                      </div>
                    </div>
                  </div>
                </div> -->

              </div>

            </div>

          </section><!-- /Category Header Section -->

          <!-- Category Product List Section -->
          <section id="category-product-list" class="category-product-list section">
 
            <div class="container" data-aos="fade-up" data-aos-delay="100">

              <div class="row gy-4">
                <!-- Product 1 -->
 <?php
 if(isset($_GET['id'])){

  $mainsub=mysqli_query($connection,"select * from subcategory where category_id='".$_GET['id']."'");
  foreach($mainsub as $subcategory){
    ?>

    <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <!-- <span class="product-label">New Season</span> -->
                      <img src="assets/img/categories/<?php echo $subcategory['sub_image']?>" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                         <a href="shop.php?id=<?php echo $subcategory['sub_id']?>"> <button type="button" class="add-to-cart-btn">shop now</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html"><?php echo $subcategory['sub_detail']?></a></h3>
                       
                      </div>
                                         </div>
                  </div>
                 
                </div>
                

    <?php
 }
  
?>
  <?php
              
                  }
  ?>


<?php
if (isset($_GET['id'])){
  $subcat=mysqli_query($connection,"select * from subcategory where sub_id= '".$_GET['id']."'");
  foreach($subcat as $final){
    ?>
<div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <!-- <span class="product-label">New Season</span> -->
                      <img src="assets/img/categories/<?php echo $final['sub_image']?>" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                         <a href="shop.php?id=<?php echo $final['sub_id']?>"> <button type="button" class="add-to-cart-btn">shop now</button></a>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html"><?php echo $final['sub_detail']?></a></h3>
                       
                      </div>
                                         </div>
                  </div>
                 
                </div>
    



<?php
  }
}

?>
                <!-- End Product 1 -->



 <!-- Category Product List Section -->
<section id="category-product-list" class="category-product-list section">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">

      <?php
      if (isset($_GET['catid']) && is_numeric($_GET['catid'])) {
        $catid = (int)$_GET['catid'];

        // Fetch subcategories or products for this category
        $mainsub = mysqli_query($connection, "SELECT * FROM subcategory WHERE category_id = $catid");

        if (mysqli_num_rows($mainsub) > 0) {
          foreach ($mainsub as $subcategory) {
      ?>

            <div class="col-lg-6">
              <div class="product-box">
                <div class="product-thumb">
                  <img src="assets/img/categories/<?php echo htmlspecialchars($subcategory['sub_image']); ?>" alt="Product Image" class="main-img" loading="lazy">
                  <div class="product-overlay">
                    <div class="product-quick-actions">
                      <button type="button" class="quick-action-btn"><i class="bi bi-heart"></i></button>
                      <button type="button" class="quick-action-btn"><i class="bi bi-arrow-repeat"></i></button>
                      <button type="button" class="quick-action-btn"><i class="bi bi-eye"></i></button>
                    </div>
                    <div class="add-to-cart-container">
                      <a href="shop.php?id=<?php echo $subcategory['sub_id']; ?>">
                        <button type="button" class="add-to-cart-btn">Shop Now</button>
                      </a>
                    </div>
                  </div>
                </div>
                <div class="product-content">
                  <div class="product-details">
                    <h3 class="product-title">
                      <a href="product-details.php?id=<?php echo $subcategory['sub_id']; ?>">
                        <?php echo htmlspecialchars($subcategory['sub_detail']); ?>
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
            </div>

      <?php
          }
        } else {
          echo "<p>No products found for this category.</p>";
        }
      } else {
        echo "<p>Please select a category to view its products.</p>";
      }
      ?>

    </div>
  </div>
</section>




                <!-- Product 2 -->
                <!-- <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label product-label-sale">-30%</span>
                      <img src="assets/img/product/product-6.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Aliquam tincidunt mauris eu risus</a></h3>
                        <div class="product-price">
                          <span class="original">$199.99</span>
                          <span class="sale">$139.99</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                        </div>
                        <span class="rating-number">4.5</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option" style="background-color: #0ea5e9;"></span>
                        <span class="color-option active" style="background-color: #111827;"></span>
                        <span class="color-option" style="background-color: #a855f7;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 2 -->

                <!-- Product 3
                <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <img src="assets/img/product/product-9.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Cras ornare tristique elit</a></h3>
                        <div class="product-price">
                          <span>$89.50</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star"></i>
                          <i class="bi bi-star"></i>
                        </div>
                        <span class="rating-number">3.0</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option active" style="background-color: #ef4444;"></span>
                        <span class="color-option" style="background-color: #64748b;"></span>
                        <span class="color-option" style="background-color: #eab308;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 3 -->

                <!-- Product 4 -->
                <!-- <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <img src="assets/img/product/product-11.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Integer vitae libero ac risus</a></h3>
                        <div class="product-price">
                          <span>$119.00</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="rating-number">5.0</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option" style="background-color: #10b981;"></span>
                        <span class="color-option active" style="background-color: #8b5cf6;"></span>
                        <span class="color-option" style="background-color: #ec4899;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 4 -->

                <!-- Product 5 -->
                <!-- <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label product-label-sold">Sold Out</span>
                      <img src="assets/img/product/product-2.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn disabled">Sold Out</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Donec eu libero sit amet quam</a></h3>
                        <div class="product-price">
                          <span>$75.00</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                        </div>
                        <span class="rating-number">4.7</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option active" style="background-color: #4b5563;"></span>
                        <span class="color-option" style="background-color: #e11d48;"></span>
                        <span class="color-option" style="background-color: #4f46e5;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 5 -->

                <!-- Product 6 -->
                <!-- <div class="col-lg-6">
                  <div class="product-box">
                    <div class="product-thumb">
                      <span class="product-label product-label-hot">Hot</span>
                      <img src="assets/img/product/product-12.webp" alt="Product Image" class="main-img" loading="lazy">
                      <div class="product-overlay">
                        <div class="product-quick-actions">
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-heart"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-arrow-repeat"></i>
                          </button>
                          <button type="button" class="quick-action-btn">
                            <i class="bi bi-eye"></i>
                          </button>
                        </div>
                        <div class="add-to-cart-container">
                          <button type="button" class="add-to-cart-btn">Add to Cart</button>
                        </div>
                      </div>
                    </div>
                    <div class="product-content">
                      <div class="product-details">
                        <h3 class="product-title"><a href="product-details.html">Pellentesque habitant morbi tristique</a></h3>
                        <div class="product-price">
                          <span>$64.95</span>
                        </div>
                      </div>
                      <div class="product-rating-container">
                        <div class="rating-stars">
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-fill"></i>
                          <i class="bi bi-star-half"></i>
                          <i class="bi bi-star"></i>
                        </div>
                        <span class="rating-number">3.6</span>
                      </div>
                      <div class="product-color-options">
                        <span class="color-option" style="background-color: #eab308;"></span>
                        <span class="color-option" style="background-color: #14b8a6;"></span>
                        <span class="color-option active" style="background-color: #facc15;"></span>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- End Product 6 -->
              </div>

            </div>

          </section><!-- /Category Product List Section -->

          <!-- Category Pagination Section -->
          <!-- <section id="category-pagination" class="category-pagination section">

            <div class="container">
              <nav class="d-flex justify-content-center" aria-label="Page navigation">
                <ul>
                  <li>
                    <a href="#" aria-label="Previous page">
                      <i class="bi bi-arrow-left"></i>
                      <span class="d-none d-sm-inline">Previous</span>
                    </a>
                  </li>

                  <li><a href="#" class="active">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li class="ellipsis">...</li>
                  <li><a href="#">8</a></li>
                  <li><a href="#">9</a></li>
                  <li><a href="#">10</a></li>

                  <li>
                    <a href="#" aria-label="Next page">
                      <span class="d-none d-sm-inline">Next</span>
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </li>
                </ul>
              </nav>
            </div> -->

          <!-- </section> -->
          <!-- /Category Pagination Section -->

        </div>

      </div>
    </div>

  </main>

  <footer id="footer" class="footer light-background">
    <div class="footer-main">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6">
            <div class="footer-widget footer-about">
              <a href="index.html" class="logo">
                <span class="sitename">FashionStore</span>
              </a>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in nibh vehicula, facilisis magna ut, consectetur lorem. Proin eget tortor risus.</p>

              <div class="social-links mt-4">
                <h5>Connect With Us</h5>
                <div class="social-icons">
                  <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                  <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                  <a href="#" aria-label="Twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="#" aria-label="TikTok"><i class="bi bi-tiktok"></i></a>
                  <a href="#" aria-label="Pinterest"><i class="bi bi-pinterest"></i></a>
                  <a href="#" aria-label="YouTube"><i class="bi bi-youtube"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="footer-widget">
              <h4>Shop</h4>
              <ul class="footer-links">
                <li><a href="category.html">New Arrivals</a></li>
                <li><a href="category.html">Bestsellers</a></li>
                <li><a href="category.html">Women's Clothing</a></li>
                <li><a href="category.html">Men's Clothing</a></li>
                <li><a href="category.html">Accessories</a></li>
                <li><a href="category.html">Sale</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 col-sm-6">
            <div class="footer-widget">
              <h4>Support</h4>
              <ul class="footer-links">
                <li><a href="support.html">Help Center</a></li>
                <li><a href="account.html">Order Status</a></li>
                <li><a href="shiping-info.html">Shipping Info</a></li>
                <li><a href="return-policy.html">Returns &amp; Exchanges</a></li>
                <li><a href="#">Size Guide</a></li>
                <li><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="footer-widget">
              <h4>Contact Information</h4>
              <div class="footer-contact">
                <div class="contact-item">
                  <i class="bi bi-geo-alt"></i>
                  <span>123 Fashion Street, New York, NY 10001</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-telephone"></i>
                  <span>+1 (555) 123-4567</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-envelope"></i>
                  <span>hello@example.com</span>
                </div>
                <div class="contact-item">
                  <i class="bi bi-clock"></i>
                  <span>Monday-Friday: 9am-6pm<br>Saturday: 10am-4pm<br>Sunday: Closed</span>
                </div>
              </div>

              <div class="app-buttons mt-4">
                <a href="#" class="app-btn">
                  <i class="bi bi-apple"></i>
                  <span>App Store</span>
                </a>
                <a href="#" class="app-btn">
                  <i class="bi bi-google-play"></i>
                  <span>Google Play</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <div class="row gy-3 align-items-center">
          <div class="col-lg-6 col-md-12">
            <div class="copyright">
              <p>© <span>Copyright</span> <strong class="sitename">MyWebsite</strong>. All Rights Reserved.</p>
            </div>
            <div class="credits mt-1">
              <!-- All the links in the footer should remain intact. -->
              <!-- You can delete the links only if you've purchased the pro version. -->
              <!-- Licensing information: https://bootstrapmade.com/license/ -->
              <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>

          <div class="col-lg-6 col-md-12">
            <div class="d-flex flex-wrap justify-content-lg-end justify-content-center align-items-center gap-4">
              <div class="payment-methods">
                <div class="payment-icons">
                  <i class="bi bi-credit-card" aria-label="Credit Card"></i>
                  <i class="bi bi-paypal" aria-label="PayPal"></i>
                  <i class="bi bi-apple" aria-label="Apple Pay"></i>
                  <i class="bi bi-google" aria-label="Google Pay"></i>
                  <i class="bi bi-shop" aria-label="Shop Pay"></i>
                  <i class="bi bi-cash" aria-label="Cash on Delivery"></i>
                </div>
              </div>

              <div class="legal-links">
                <a href="tos.html">Terms</a>
                <a href="privacy.html">Privacy</a>
                <a href="tos.html">Cookies</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </footer>

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