<?php
session_start();

$registered_email = $_SESSION['email_input'];
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
      <h1 class="text-center">Thank you!</h1>
    </div>
  </header>
  <main>
    <div class="container">
      <div class="row justify-content-md-center">
        <div class="col-6">
          <div role="alert" class="alert alert-success">
            Success! The registered email address is: <?php echo $registered_email ?>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>