<?php

include "include/db.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate form data (basic validation, you might want to add more)
    if (empty($username) || empty($email) || empty($password)) {
      $error_message="All fields are required.";
    } else {
      // Check if email already exists
      $email_check_query = "SELECT * FROM users WHERE email = ?";
      $stmt = mysqli_prepare($conn, $email_check_query);
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if (mysqli_num_rows($result) > 0) {
        $error_message="Email already exists. Please use a different email.";
      } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare the SQL statement
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind the parameters
            mysqli_stmt_bind_param($stmt, "sss", $username, $email, $hashed_password);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                $success_message="New record created successfully";
            } else {
                echo "Error: " . mysqli_stmt_error($stmt);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            $error_message="Error preparing the statement: " . mysqli_error($conn);
        }
      }
    }
}

// Close the connection
mysqli_close($conn);
?>
