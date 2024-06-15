<?php
// deletepassword.php

require_once 'include/db.php'; // Include your database connection file

session_start();

if (!isset($_SESSION['userId'])) {
    echo "User not logged in.";
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $userId = $_SESSION['userId']; // Ensure the session contains the userId

    // Prepare and execute the delete statement
    $stmt = $conn->prepare("DELETE FROM passwords WHERE id = ? AND user_id = ?");
    if (!$stmt) {
        echo "Prepare failed: (" . $conn->errno . ") " . $conn->error;
        exit();
    }

    $stmt->bind_param("ii", $id, $userId);

    if ($stmt->execute()) {
        echo "Record deleted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No ID parameter provided.";
}

$conn->close();
?>
