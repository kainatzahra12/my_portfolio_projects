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
            <li class="current">Checkout</li>
          </ol>
        </nav>
        <h1>Checkout</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Checkout Section -->
    <section id="checkout" class="checkout section">

<div class="container" data-aos="fade-up" data-aos-delay="100">


<div class="row">
<div class="col-lg-8">
          

            <!-- Checkout Forms Container -->
            <div class="checkout-forms">
              <!-- Step 1: Customer Information -->
              <div class="checkout-form active">
                <div class="form-header">
                  <h3>Customer Information</h3>
                  <p>Please enter your contact details</p>
                </div>
                <form class="checkout-form-element" action="code.php" method="post">
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="first-name">First Name</label>
                      <input type="text" name="firstname" class="form-control" placeholder="Your First Name" required="">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="last-name">Last Name</label>
                      <input type="text" name="lastname" class="form-control" placeholder="Your Last Name" required="">
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                  </div>
                  <div class="form-group mt-3">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" placeholder="Your Phone Number" required="">
                  </div>
                  <br>
                  <!-- Step 2: Shipping Address -->

                  <div class="form-header mt-5">
                 
                  <h3>Shipping Address</h3>
                  <p>Where should we deliver your order?</p>
                </div>

                  <div class="form-group mt">
                    <label for="address">Street Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Street Address" required="">
                  </div>

                  <div class="row mt-3">
                    <div class="col-md-4 form-group">
                      <label for="city">City</label>
                      <input type="text" name="city" class="form-control" placeholder="City" required="">
                    </div>
                    <br>

                    <!-- Step 3: Payment Method -->
                     <div class="form-header mt-5">
                  <h3>Payment Method</h3>
                  <p>Choose how you'd like to pay</p>
                </div>

                 <div class="row">
                    <div class="col-md-4 form-group">
                      <label for="payment">Cash on delievery</label>
                      <input type="text" name="payment" class="form-control" placeholder="payment" required="">
                    </div>
                  

                  <div class="text-end mt-4">
                    <button type="submit" name="customer" class="btn btn-primary">Place Order</button>
                  <!-- </div> -->
<!-- </div> -->
<!-- </div> -->
                </form>
              <!-- </div> -->
<!-- </div> -->


<?php
// session_start();
$cart_items = isset($_SESSION['cart_items']) ? $_SESSION['cart_items'] : [];
$total = isset($_SESSION['cart_total']) ? $_SESSION['cart_total'] : 0;
?>
<div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
<div class="order-summary-content">
  <h2 class="mb-4">Order Summary</h2>

  <?php if (count($cart_items) > 0): ?>
    <div class="order-items">
      <?php foreach ($cart_items as $row): ?>
        <div class="order-item mb-3">
          <div class="row g-3 align-items-center">
            <div class="col-3 order-item-image">
              <img src="assets/img/categories/<?= $row['proimage']; ?>" alt="Product" class="img-fluid" style="width: 80px; height: 80px;">
            </div>
            <div class="col-9 order-item-details">
              <h4 class="mb-1"><?= $row['proname']; ?></h4>
              <p class="order-item-variant mb-1">Quantity: <?= $row['product_qty']; ?></p>
              <div class="order-item-price mb-2">
                <span class="quantity"><?= $row['product_qty']; ?> ×</span>
                <span class="price">$<?= number_format($row['proprice'], 2); ?></span>
              </div>
              <!-- <form method="post" action="code.php" class="d-inline"> -->
                <!-- <input type="hidden" name="delete_cart_id" value="<?= $row['cart_id']; ?>"> -->
                <!-- <button type="submit" name="delete_cart" class="btn btn-sm btn-outline-danger">
                  <i class="bi bi-trash"></i> Remove
                </button> -->
              <!-- </form> -->
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
      
    <div class="order-totals mt-4">
      <div class="order-subtotal d-flex justify-content-between mb-2">
        <span>Subtotal</span>
        <span>$<?= number_format($total, 2); ?></span>
      </div>
      <!-- <div class="order-shipping d-flex justify-content-between mb-2">
        <span>Shipping</span>
        <span>$9.99</span>
      </div> -->
      <div class="order-tax d-flex justify-content-between mb-2">
        <span>Tax</span>
        <span>$0.00</span>
      </div>
      <div class="order-total d-flex justify-content-between fw-bold">
        <span>Total</span>
        <span>$<?= number_format($total  , 2); ?></span>
      </div>
    </div>

    <!-- <div class="promo-code mt-3">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Promo Code" aria-label="Promo Code">
        <button class="btn btn-outline-primary" type="button">Apply</button>
      </div>
    </div> -->

    <div class="secure-checkout mt-4">
      <div class="secure-checkout-header d-flex align-items-center">
        <i class="bi bi-shield-lock me-2"></i>
        <span>Secure Checkout</span>
      </div>
      <div class="payment-icons mt-2">
        <i class="bi bi-credit-card-2-front"></i>
        <i class="bi bi-credit-card"></i>
        <i class="bi bi-paypal"></i>
        <i class="bi bi-apple"></i>
      </div>
    </div>
  <?php else: ?>
    <div class="alert alert-warning">Your cart is empty.</div>
  <?php endif; ?>
</div>
  </div>
      
        <!-- Terms and Privacy Modals -->
        <div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="privacyModal" tabindex="-1" aria-labelledby="privacyModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in dui mauris. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
                <p>Suspendisse in orci enim. Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">I Understand</button>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Checkout Section -->

  </main>

  <?php 
  include_once "footer.php"
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