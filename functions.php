<?php
$email_input = $_GET['input-email'] ?? '';

// Email validation
$is_email = fn ($str) => str_contains($str, '.') && str_contains($str, '@');
?>