<?php

include_once "header.php";

include_once "code.php";

?>

<!-- Step 4: Order Review -->
              <div class="checkout-form" data-form="4">
                <div class="form-header">
                  <h3>Review Your Order</h3>
                  <p>Please review your information before placing your order</p>
                </div>
               
    
                <form class="checkout-form-element" method="post" action="code.php">
                  <input type="hidden" name="step" value="final">

                  <!-- <div class="review-sections"> -->
                    <div class="review-section">
                      <div class="review-section-header">
                        <h4>Contact Information</h4>
                        <!-- <button type="button" class="btn-edit" data-edit="1">Edit</button> -->
                      </div>
                      <div class="review-section-content">
                        <p class="review-name"><?php echo isset($_SESSION['first_name']) ? $_SESSION['first_name'] : 'First Name Not Provided'; ?></p>
                        <p class="review-email"><?php echo isset($_SESSION['email']) ? $_SESSION['email'] : 'Email Not Provided'; ?></p>
                        <p class="review-phone"><?php echo isset($_SESSION['phone']) ? $_SESSION['phone'] : 'Phone Not Provided'; ?></p>
                      </div>
                    </div>

                    <div class="review-section mt-3">
                      <div class="review-section-header">
                        <h4>Shipping Address</h4>
                        <button type="button" class="btn-edit" data-edit="2">Edit</button>
                      </div>
                      <div class="review-section-content">
                        <!-- <p></p> -->
                        <p><?php echo isset($_SESSION['city']) ? $_SESSION['city'] : 'City Not Provided'; ?></p>
                        <p><?php echo isset($_SESSION['country']) ? $_SESSION['country'] : 'Country Not Provided'; ?></p>
                      </div>
                    </div>

                    <div class="review-section mt-3">
                      <div class="review-section-header">
                        <h4>Payment Method</h4>
                        <button type="button" class="btn-edit" data-edit="3">Edit</button>
                      </div>
                      <div class="review-section-content">
                        <p><i class="bi bi-credit-card-2-front me-2"></i> <?php echo isset($_SESSION['payment_method']) ? $_SESSION['payment_method'] : 'Payment Method Not Provided'; ?></p>
                      </div>
                    </div>
                  <!-- </div> -->

                  <div class="form-check mt-4">
                    <input class="form-check-input" type="checkbox" id="terms" name="terms" required="">
                    <label class="form-check-label" for="terms">
                      I agree to the <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">Terms and Conditions</a> and <a href="#" data-bs-toggle="modal" data-bs-target="#privacyModal">Privacy Policy</a>
                    </label>
                  </div>
                  <div class="success-message d-none">Your order has been placed successfully! Thank you for your purchase.</div>
                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary prev-step" data-prev="3">Back to Payment</button>
                    <button type="submit" class="btn btn-success place-order-btn">Place Order</button>
                  </div>
</div>  
                </form>
              
            <!-- </div> -->
           

<!-- <h3>Review Your  -->


<?php

include_once "footer.php";

?>