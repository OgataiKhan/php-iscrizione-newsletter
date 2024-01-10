<?php
$email_input = $_GET['input-email'] ?? '';

$is_email = fn ($str) => str_contains($str, '.') && str_contains($str, '@');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Iscrizione Newsletter</title>
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /Bootstrap -->
</head>

<body>
  <header class="py-5">
    <div class="container">
      <h1 class="text-center">PHP Iscrizione Newsletter</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <!-- Input form -->
      <div class="row justify-content-md-center">
        <div class="col-6">
          <form class="mb-3" action="index.php" method="GET" novalidate>
            <div class="mb-3">
              <label for="input-email" class="form-label">Email address</label>
              <input type="email" name="input-email" class="form-control" id="input-email" placeholder="name@example.com">
            </div>
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-primary">Filter</button>
            </div>
          </form>
        </div>
      </div>
      <!-- /Input form -->
      <!-- Alerts -->
      <div class="row justify-content-md-center">
        <div class="col-6">
          <?php if (!empty($email_input) && $is_email($email_input)) : ?>
            <div class="alert alert-success" role="alert">
              Success!
            </div>
          <?php elseif (!empty($email_input)) : ?>
            <div class="alert alert-danger" role="alert">
              Please enter a valid email address.
            </div>
          <?php endif; ?>
        </div>
      </div>
      <!-- /Alerts -->
    </div>
  </main>
</body>

</html>