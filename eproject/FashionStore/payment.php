<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "code.php";

?>

<!-- Step 3: Payment Method -->
              <div class="checkout-form" data-form="3">
                <div class="form-header">
                  <h3>Payment Method</h3>
                  <p>Choose how you'd like to pay</p>
                </div>
               
                <form class="checkout-form-element" action="code.php" method="post">
                  <input type="hidden" name="step" value="payment">

                  <!-- <div class="payment-methods"> -->
                    <!-- <div class="payment-method active">
                      <div class="payment-method-header"> -->
                       <select name="payment_method" required>
                          <option value="Credit Card">Credit Card</option>
                               <option value="Paypal">Paypal</option>
                           <option value="Cash on Delivery">Cash on Delivery</option>
                         </select>
                         <!-- <button type="submit">Review Order</button> -->
                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary prev-step" data-prev="2">Back to Shipping</button>
                    <button type="submit" class="btn btn-primary next-step" data-next="4">Review Order</button>
                  </div>
                </form>
              </div>
