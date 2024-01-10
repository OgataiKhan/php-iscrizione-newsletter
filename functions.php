<?php
session_start();

$_SESSION['email_input'] = $_GET['input-email'] ?? '';

// Email validation
$is_email = fn ($str) => str_contains($str, '.') && str_contains($str, '@');

// Success redirect
if (!empty($_SESSION['email_input']) && $is_email($_SESSION['email_input'])) {
  header('Location: thankyou.php');
  die;
}
?>