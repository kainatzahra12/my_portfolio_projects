<?php
include_once "code.php";
include_once "session.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>About - FashionStore Bootstrap Template</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/drift-zoom/drift-basic.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FashionStore
  * Template URL: https://bootstrapmade.com/fashion-store-bootstrap-template/
  * Updated: Apr 26 2025 with Bootstrap v5.3.5
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="about-page">

  <header id="header" class="header position-relative">
    <!-- Top Bar -->
    <div class="top-bar py-2 d-none d-lg-block">
      <div class="container-fluid container-xl">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="d-flex align-items-center">
              <div class="top-bar-item me-4">
                <i class="bi bi-telephone-fill me-2"></i>
                <span>Customer Support: </span>
                <a href="tel:+1234567890">+1 (234) 567-890</a>
              </div>
              <div class="top-bar-item">
                <i class="bi bi-envelope-fill me-2"></i>
                <a href="mailto:support@example.com">support@example.com</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="d-flex justify-content-end">
              <div class="top-bar-item me-4">
                <a href="track-order.html">
                  <i class="bi bi-truck me-2"></i>Track Order
                </a>
              </div>
              <div class="top-bar-item dropdown me-4">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="bi bi-translate me-2"></i>English
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-check2 me-2 selected-icon"></i>English</a></li>
                  <li><a class="dropdown-item" href="#">Español</a></li>
                  <li><a class="dropdown-item" href="#">Français</a></li>
                  <li><a class="dropdown-item" href="#">Deutsch</a></li>
                </ul>
              </div>
              <div class="top-bar-item dropdown">
                <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                  <i class="bi bi-currency-dollar me-2"></i>USD
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="bi bi-check2 me-2 selected-icon"></i>USD</a></li>
                  <li><a class="dropdown-item" href="#">EUR</a></li>
                  <li><a class="dropdown-item" href="#">GBP</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Main Header -->
    <div class="main-header">
      <div class="container-fluid container-xl">
        <div class="d-flex py-3 align-items-center justify-content-between">

          <!-- Logo -->
          <a href="index.html" class="logo d-flex align-items-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.webp" alt=""> -->
            <h1 class="sitename">Fashion<span>Store</span></h1>
          </a>

          <!-- Search -->
          <form class="search-form desktop-search-form" action="search.php" method="GET">
  <div class="input-group">
    <input type="text" class="form-control" name="query" placeholder="Search for products...">
    <button class="btn search-btn" type="submit">
      <i class="bi bi-search"></i>
    </button>
  </div>
</form>


          <!-- Actions -->
          <div class="header-actions d-flex align-items-center justify-content-end">

            <!-- Mobile Search Toggle -->
            <button class="header-action-btn mobile-search-toggle d-xl-none" type="button" data-bs-toggle="collapse" data-bs-target="#mobileSearch" aria-expanded="false" aria-controls="mobileSearch">
              <i class="bi bi-search"></i>
            </button>

            <!-- Account -->
            <div class="dropdown account-dropdown">
              <button class="header-action-btn" data-bs-toggle="dropdown">
                <i class="bi bi-person"></i>
                <span class="action-text d-none d-md-inline-block">Account</span>
              </button>
              <div class="dropdown-menu">
                <div class="dropdown-header">
                  <h6>Welcome to <span class="sitename">FashionStore</span></h6>
                  <p class="mb-0">Access account &amp; manage orders</p>
                </div>
                <div class="dropdown-body">
                  <a class="dropdown-item d-flex align-items-center" href="account.php">
                    <i class="bi bi-person-circle me-2"></i>
                    <span>My Profile</span>
                  </a>
                  <!-- <a class="dropdown-item d-flex align-items-center" href="orders.html">
                    <i class="bi bi-bag-check me-2"></i>
                    <span>My Orders</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="wishlist.html">
                    <i class="bi bi-heart me-2"></i>
                    <span>My Wishlist</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="returns.html">
                    <i class="bi bi-arrow-return-left me-2"></i>
                    <span>Returns &amp; Refunds</span>
                  </a>
                  <a class="dropdown-item d-flex align-items-center" href="settings.html">
                    <i class="bi bi-gear me-2"></i>
                    <span>Settings</span>
                  </a> -->
                </div>
                <div class="dropdown-footer">
                  <a href="login.php" class="btn btn-primary w-100 mb-2">Sign In</a>
                  <a href="register.php" class="btn btn-outline-primary w-100">Register</a>
                </div>
              </div>
            </div>

            <!-- Wishlist -->
            <!-- <a href="wishlist.html" class="header-action-btn d-none d-md-flex">
              <i class="bi bi-heart"></i>
              <span class="action-text d-none d-md-inline-block">Wishlist</span>
              <span class="badge">0</span>
            </a> -->
            <!-- Cart -->
            <div class="dropdown cart-dropdown">
              <button class="header-action-btn" data-bs-toggle="dropdown">
                <i class="bi bi-cart3"></i>
                <span class="action-text d-none d-md-inline-block">Cart</span>
                <span class="badge">
                  <?php
						$count=0;
						if(isset($_SESSION['user_id'])){
							$addtocartdataget = mysqli_query($connection,"select * from add_to_cart where user_id = '".$_SESSION['user_id']."' ");
							foreach($addtocartdataget as $dataproductuser){
								$count++;
							}
							?>
							<?php
						} echo $count;
						?></span>
              </button>
              <div class="dropdown-menu cart-dropdown-menu">
                <div class="dropdown-header">
                  <h6>Shopping Cart</h6>
                </div>
               <div class="dropdown-body">
  <div class="cart-items">
   <?php
$total = 0;
$cart_items = [];

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];

    $query = mysqli_query($connection, "
        SELECT a.cart_id, a.product_qty, p.proprice, p.proimage, p.proname
        FROM add_to_cart a
        JOIN products p ON a.product_id = p.proid
        WHERE a.user_id = '$user_id'
    ");

    // Fetch all results
    $cart_items = mysqli_fetch_all($query, MYSQLI_ASSOC);

    // Calculate total
    foreach ($cart_items as $row) {
        $qty = $row['product_qty'];
        $price = $row['proprice'];
        $subtotal = $qty * $price;
        $total += $subtotal;
    }
}
?>

<!-- Cart Dropdown Body -->
<div class="dropdown-body">
  <div class="cart-items">
    <?php foreach ($cart_items as $row) { ?>
      <form method="post" action="code.php">
        <input type="hidden" name="delete_cart_id" value="<?php echo $row['cart_id']; ?>">
        <div class="cart-item">
          <div class="cart-item-image">
            <img src="assets/img/categories/<?php echo $row['proimage']; ?>" alt="Product" class="img-fluid">
          </div>
          <div class="cart-item-content">
            <h6 class="cart-item-title"><?php echo $row['proname']; ?></h6>
            <div class="cart-item-meta"><?php echo $row['product_qty']; ?> × $<?php echo $row['proprice']; ?></div>
          </div>
          <button type="submit" name="delete_cart" class="cart-item-remove">
            <i class="bi bi-x"></i>
          </button>
        </div>
      </form>
    <?php } ?>
  </div>
</div>
    </div>
<!-- Cart Dropdown Footer -->
<div class="dropdown-footer">
  <div class="cart-total">
    <span>Total:</span>
    <span class="cart-total-price">$<?php echo number_format($total, 2); ?></span>
  </div>
  <div class="cart-actions">
    <a href="cart.php" class="btn btn-outline-primary">View Cart</a>
    <a href="checkout.php" class="btn btn-primary">Checkout</a>
  </div>
</div>
    </div>
    </div>
         <!-- Mobile Navigation Toggle -->
            <i class="mobile-nav-toggle d-xl-none bi bi-list me-0"></i>

         </div>
        </div>
      </div>
    </div>

    <!-- Navigation -->
    <div class="header-nav">
      <div class="container-fluid container-xl position-relative">
        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
           

 <!-- Products Mega Menu 2 -->
            <li class="products-megamenu-2"><a href=""><span>Categories</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

              <!-- Products Mega Menu 2 Mobile View -->
              <ul class="mobile-megamenu">

              <?php
                  $maincategory=mysqli_query($connection,"select * from category");
                  foreach($maincategory as $data){
                    ?>
                <li><a href="#"><?php echo $data['cat_name']?></a></li>
                 <?php
                 }?>
                <!-- <li><a href="#">Men</a></li>
                <li><a href="#">Kids'</a></li> -->

                <li class="dropdown"><a href="#"><span>Clothing</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                     <li><a href="#">Swimwear</a></li>
                  </ul>
                </li>

               
              </ul><!-- End Products Mega Menu 2 Mobile View -->

            
             <!-- Products Mega Menu 2 Desktop View -->
<div class="desktop-megamenu">

  <div class="megamenu-tabs">
    <ul class="nav nav-tabs" role="tablist">
      <?php
      $maincategory = mysqli_query($connection, "SELECT * FROM category");
      $first = true;
      foreach ($maincategory as $data) {
      ?>
        <li class="nav-item" role="presentation">
          <button class="nav-link <?php if ($first) echo 'active'; ?>" id="tab-<?php echo $data['cat_id']; ?>" data-bs-toggle="tab" data-bs-target="#subcategory<?php echo $data['cat_id']; ?>" type="button" role="tab" aria-selected="<?php echo $first ? 'true' : 'false'; ?>">
            <?php echo $data['cat_name']; ?>
          </button>
        </li>
      <?php
        $first = false;
      }
      ?>
    </ul>
  </div>

  <!-- Tabs Content -->
  <div class="megamenu-content tab-content">
    <?php
    $maincategory = mysqli_query($connection, "SELECT * FROM category");
    $first = true;
    foreach ($maincategory as $data) {
      $cat_id = $data['cat_id'];
    ?>
      <div class="tab-pane fade <?php if ($first) echo 'show active'; ?>" id="subcategory<?php echo $cat_id; ?>" role="tabpanel" aria-labelledby="tab-<?php echo $cat_id; ?>">
        <div class="category-layout">
          <div class="categories-section">
            <div class="category-links">
              <div class="link-row">
                <?php
                $subcategories = mysqli_query($connection, "SELECT * FROM subcategory WHERE category_id = $cat_id");
                foreach ($subcategories as $sub) {
                ?>
                 <a href="shop.php?subcatid=<?php echo $sub['sub_id']; ?>"><?php echo $sub['sub_title']?></a>

                <?php } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
      $first = false;
    }
    ?>
  </div>

</div><!-- End Products Mega Menu 2 Desktop View -->


           

            <li><a href="contact.php">Contact</a></li>

          </ul>
        </nav>
      </div>
    </div>

    <!-- Announcement Bar -->
    <div class="announcement-bar py-2">
      <div class="container-fluid container-xl">
        <div class="announcement-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 1,
              "effect": "slide",
              "direction": "vertical"
            }
          </script>
          <div class="swiper-wrapper">
            <div class="swiper-slide">🚚 Free shipping on orders over $50</div>
            <div class="swiper-slide">💰 30 days money back guarantee</div>
            <div class="swiper-slide">🎁 20% off on your first order - Use code: FIRST20</div>
            <div class="swiper-slide">⚡ Flash Sale! Up to 70% off on selected items</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Search Form -->
    <div class="collapse" id="mobileSearch">
      <div class="container">
        <form class="search-form">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for products...">
            <button class="btn search-btn" type="submit">
              <i class="bi bi-search"></i>
            </button>
          </div>
        </form>
      </div>
    </div>

  </header>

   <?php
  if(isset($_SESSION['dlt'])){
    ?>
    <div class="alert alert-warning" role="alert">
        <?php
        echo $_SESSION['dlt'];
         unset($_SESSION['dlt']);
        ?>
</div>
    <?php
  }

 
  
  ?>