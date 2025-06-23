 <?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include_once "code.php";

?>

 <!-- Step 2: Shipping Address -->
              <div class="checkout-form" data-form="2">
                <div class="form-header">
                 
                  <h3>Shipping Address</h3>
                  <p>Where should we deliver your order?</p>
                </div>
                <form class="checkout-form-element" action="code.php" method="post">
                  <input type="hidden" name="step" value="shipping">

                  <div class="form-group">
                    <label for="address">Street Address</label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Street Address" required="">
                  </div>
                  <!-- <div class="form-group mt-3">
                    <label for="apartment">Apartment, Suite, etc. (optional)</label>
                    <input type="text" class="form-control" name="apartment" id="apartment" placeholder="Apartment, Suite, Unit, etc.">
                  </div> -->
                  <div class="row mt-3">
                    <div class="col-md-4 form-group">
                      <label for="city">City</label>
                      <input type="text" name="city" class="form-control" id="city" placeholder="City" required="">
                    </div>
                    <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
                      <label for="state">State</label>
                      <input type="text" name="state" class="form-control" id="state" placeholder="State" required="">
                    </div> -->
                    <!-- <div class="col-md-4 form-group mt-3 mt-md-0">
                      <label for="zip">ZIP Code</label>
                      <input type="text" name="zip" class="form-control" id="zip" placeholder="ZIP Code" required="">
                    </div> -->
                  </div>
                  <div class="form-group mt-3">
                    <label for="country">Country</label>
                    <select class="form-select" id="country" name="country" required="">
                      <option value="">Select Country</option>
                      <option value="US">United States</option>
                      <option value="CA">Canada</option>
                      <option value="UK">United Kingdom</option>
                      <option value="AU">Australia</option>
                      <option value="DE">Germany</option>
                      <option value="FR">France</option>
                    </select>
                  </div>
                  <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" id="save-address" name="save-address">
                    <label class="form-check-label" for="save-address">
                      Save this address for future orders
                    </label>
                  </div>
                  <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-outline-secondary prev-step" data-prev="1">Back to Information</button>
                    <button type="submit" class="btn btn-primary next-step" data-next="3">Continue to Payment</button>
                  </div>
                </form>
              </div>
