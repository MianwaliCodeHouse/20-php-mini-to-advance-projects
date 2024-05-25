<?php

include "submit.php";

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registeration System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">
  <div class="container mx-auto p-4">
    <?php
    if (isset($error_message)) {
    ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error Message!</strong> <?= $error_message ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php
    }
    ?>
    <?php
    if (isset($success_message)) {
    ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success Message!</strong> <?= $success_message ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>

    <?php
    }
    ?>
    <h1 class="text-danger font-bold mb-4 mt-5 text-center">Register</h1>
    <div class="row">
      <div class="col-lg-6 mx-auto">
        <form action="" method="POST" class="bg-white shadow-lg rounded p-5 mb-4">
          <div class="mb-2">
            <label class="form-label text-sm font-bold mb-2" for="username">
              Username
            </label>
            <input class="form-control py-2 px-3" id="name" name="username" type="text" placeholder="Name" />
          </div>
          <div class="mb-2">
            <label class="form-label text-sm font-bold mb-2" for="email">
              Email
            </label>
            <input class="form-control py-2 px-3" id="email" name="email" type="email" placeholder="example@gmail.com" />
          </div>
          <div class="mb-2">
            <label class="form-label text-sm font-bold mb-2" for="password">
              Password
            </label>
            <input class="form-control py-2 px-3" id="password" name="password" type="password" placeholder="******************" />
          </div>
          <div class="d-flex justify-content-center">
            <button class="btn btn-primary font-bold py-2 px-4 rounded mt-3">
              Register
            </button>
          </div>
        </form>
      </div>
    </div>

  </div>

</body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>