<?php
session_start();
if (isset($_SESSION['userId']) && $_SESSION['userId'] != '') {
  header('Location: dashboard.php');
  exit(); // Always use exit after header redirection
}
include "verifyLogin.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <div class="min-vh-100 d-flex flex-column align-items-center justify-content-center bg-dark">
    <?php
    if (isset($error_message)) {
    ?>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error Message!</strong> <?= $error_message ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php
    }
    ?>


    <h1 class="fw-bolder mb-4 text-center text-white">Login</h1>
    <div class="row w-100">

      <div class="col-lg-3   mx-auto">
        <div class="bg-white shadow-lg rounded p-5 max-w-sm w-100">
          <form action="" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" id="email" name="email" class="form-control" placeholder="example@gmail.com" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" id="password" name="password" class="form-control" placeholder="*********" />
            </div>
            <button type="submit" class="btn btn-primary w-100">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>

  </div>
</body>

</html>