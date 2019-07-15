<!DOCTYPE html>
<?php

  include 'include/autoloader.php';

?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title has-text-centered">
        User Registered
      </h1>
      <p class="subtitle has-text-centered">
        This is allowed users to access the website
      </p>
      <div class="level">
      <div class="level-item">
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
      </div>
    </div>
  </section>
  </body>
</html>
