
<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "code.php";

?>

<!-- Checkout Forms Container -->
            <div class="checkout-forms" data-aos="fade-up" data-aos-delay="150">
              <!-- Step 1: Customer Information -->
              <div class="checkout-form active" data-form="1">
                <div class="form-header">
                  <h3>Customer Information</h3>
                  <p>Please enter your contact details</p>
                </div>
                <form class="checkout-form-element" action="code.php" method="post">
                   <input type="hidden" name="step" value="customer">

                  <div class="row">
                  
                    <div class="col-md-6 form-group">
                      <label for="first-name">First Name</label>
                      <input type="text" name="first_name" class="form-control" id="first-name" placeholder="Your First Name" required="">
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                      <label for="last-name">Last Name</label>
                      <input type="text" name="last_name" class="form-control" id="last-name" placeholder="Your Last Name" required="">
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <label for="email">Email Address</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                  </div>
                  <div class="form-group mt-3">
                    <label for="phone">Phone Number</label>
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone Number" required="">
                  </div>
                  <div class="text-end mt-4">
                    <button type="submit" class="btn btn-primary next-step" data-next="2">Continue to Shipping</button>
                  </div>
                </form>
              </div>
