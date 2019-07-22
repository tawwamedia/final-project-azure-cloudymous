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
  <section class="section">
  <?php include('navbar.php'); ?>
    <div class="container">

      <h1 class="title has-text-centered">
        Add User
      </h1>

      <form action="login.php" method="POST" enctype="multipart/form-data">
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
