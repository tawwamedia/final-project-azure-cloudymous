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
        User Registered
      </h1>
      <p class="subtitle has-text-centered">
        This is allowed users to access the website
      </p>

      <table class="table">
        <thead>
          <tr>
            <th><abbr title="ID">ID</abbr></th>
            <th>Username</th>
            <th>Date Created</th>
          </tr>
          <?php
            $pengguna = new User;
            echo $pengguna->getAllUsers();
          ?>
        </thead>
      </table>

    </div>
  </section>
  </body>
</html>
