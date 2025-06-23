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
            <li class="current">Register</li>
          </ol>
        </nav>
        <h1>Register</h1>
      </div>
    </div><!-- End Page Title -->

    <!-- Register Section -->
    <section id="register" class="register section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-6">

            <div class="registration-form-wrapper" data-aos="zoom-in" data-aos-delay="200">

              <div class="section-header mb-4 text-center">
                <h2>Create Your Account</h2>
                <p>Sign up to start shopping and enjoy exclusive offers</p>
              </div>

              <form action="code.php" method="POST">

                <div class="row">
                  <!-- <div class="col-md-6 mb-3"> -->
                    <div class="form-group mb-3">
                      <label for="firstName">Name</label>
                      <input type="text" class="form-control" name="firstName" id="firstName" required="" minlength="2" placeholder="Enter Your Name">
                    </div>
                  <!-- </div> -->

                  <!-- <div class="col-md-6 mb-3">
                    <div class="form-group">
                      <label for="lastName">Last Name</label>
                      <input type="text" class="form-control" name="lastName" id="lastName" required="" minlength="2" placeholder="Doe">
                    </div>
                  </div> -->
                </div>

                <div class="form-group mb-3">
                  <label for="email">Email Address</label>
                  <input type="email" class="form-control" name="email" id="email" required="" placeholder="you@example.com">
                </div>

                <div class="form-group mb-3">
                  <label for="password">Password</label>
                  <div class="password-input">
                    <input type="password" class="form-control" name="password" id="password" required="" minlength="8" placeholder="At least 8 characters">
                    <i class="bi bi-eye toggle-password"></i>
                  </div>
                  <small class="password-requirements">
                    Must be at least 8 characters long and include uppercase, lowercase, number, and special character
                  </small>
                </div>

                <!-- <div class="form-group mb-4">
                  <label for="confirmPassword">Confirm Password</label>
                  <div class="password-input">
                    <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" required="" minlength="8" placeholder="Repeat your password">
                    <i class="bi bi-eye toggle-password"></i>
                  </div>
                </div> -->

                <div class="form-group mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="newsletter" id="newsletter">
                    <label class="form-check-label" for="newsletter">
                      Subscribe to our newsletter for exclusive offers and updates
                    </label>
                  </div>
                </div>

                <div class="form-group mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="terms" id="terms" required="">
                    <label class="form-check-label" for="terms">
                      I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>
                    </label>
                  </div>
                </div>
                <div class="text-center mb-4">
                  <button type="submit" name="register" class="btn btn-primary w-100">Create Account</button>
                </div>

                <div class="text-center">
                  <p class="mb-0">Already have an account? <a href="#">Sign in</a></p>
                </div>

              </form>

            </div>

          </div>
        </div>

      </div>

    </section><!-- /Register Section -->

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