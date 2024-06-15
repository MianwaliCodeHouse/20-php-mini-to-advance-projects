<?php
session_start();

if (!isset($_SESSION['userId']) || $_SESSION['userId'] == '') {
    header('Location: login.php');
    exit(); // Always use exit after header redirection
}
?>