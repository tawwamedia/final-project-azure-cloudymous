<!DOCTYPE html>
<<?php
  include('login.php'); // Includes Login Script

  if(isset($_SESSION['login_user'])){
    header("location: profile.php");
  }
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        <?php
          echo "Login Succes";
        ?>
      </h1>
    </div>
  </section>
  </body>
</html>
