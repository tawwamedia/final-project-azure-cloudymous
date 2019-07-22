<!DOCTYPE html>
<?php

  include 'include/autoloader.php';

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <style>
  .container {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 30%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }
  </style>
  <body>
  <?php include('navbar.php'); ?>
  <section class="section">
    <div class="container">
      <h1 class="title has-text-centered">
        Add User
      </h1>

      <form action="adduser.php" method="POST" enctype="multipart/form-data">
        <div class="field">
          <div class="control">
            <input class="input" type="text" name="username" placeholder="Username">
          </div>
        </div>
        <div class="field">
          <div class="control">
            <input class="input" type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="field is-grouped is-grouped-centered">
          <p class="control">
            <button class="button is-success" type="submit" name="submit">
              Add User
            </button>
          </p>
        </div>
      </form>
      <?php
        if (isset($_POST['submit'])) {
          $pengguna = new User;
          $username = $_POST["username"];
          $password = $_POST["password"];
          $pengguna->addNewUser($username,$password);
          }
        ?>
    </div>
  </section>
  </body>
</html>
