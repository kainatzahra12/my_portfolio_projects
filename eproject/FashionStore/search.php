<?php
include_once "code.php";
include_once "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Search Results</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>
<body>

<?php include 'header.php'; // Optional if you separate header layout ?>

<div class="container my-5">
  <h2 class="mb-4">Search Results</h2>

  <?php
  if (isset($_GET['query']) && !empty(trim($_GET['query']))) {
    $searchTerm = mysqli_real_escape_string($connection, trim($_GET['query']));

    $query = "SELECT * FROM products WHERE proname LIKE '%$searchTerm%' OR prodetail LIKE '%$searchTerm%'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) > 0) {
      echo '<div class="row">';
      while ($product = mysqli_fetch_assoc($result)) {
        ?>
        <div class="col-md-3 mb-4">
          <div class="card h-100">
            <img src="assets/img/categories/<?php echo $product['proimage']; ?>" class="card-img-top" alt="<?php echo $product['proname']; ?>">
            <div class="card-body">
              <h5 class="card-title"><?php echo $product['proname']; ?></h5>
              <p class="card-text">$<?php echo number_format($product['proprice'], 2); ?></p>
              <a href="product-details.php?id=<?php echo $product['proid']; ?>" class="btn btn-primary">View</a>
            </div>
          </div>
        </div>
        <?php
      }
      echo '</div>';
    } else {
      echo '<div class="alert alert-info">No products found for <strong>' . htmlspecialchars($searchTerm) . '</strong>.</div>';
    }

  } else {
    echo '<div class="alert alert-warning">Please enter a search term.</div>';
  }
  ?>
</div>

<?php include 'footer.php'; // Optional footer ?>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
