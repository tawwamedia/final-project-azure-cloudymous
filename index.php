<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <style>
    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      -moz-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
    }
  </style>
  <body>
  <section class="section">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item">
            Home
          </a>
          <a class="navbar-item">
            Documentation
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              <a class="button is-primary">
                <strong>Sign up</strong>
              </a>
              <a class="button is-light">
                Log in
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container">
     <h1 class="title has-text-centered">
        Hello Cloud!
      </h1>
      <p class="subtitle has-text-centered">
        Home Page using Bulma
      </p>
      <div class="columns">
        <div class="column">
          <a href="adduser.php" class="button is-rounded is-large is-fullwidth">Add User to Database</a>
        </div>
        <div class="column">
          <a href="upload.php" class="button is-rounded is-large is-fullwidth"> Upload Image to Server</a>
        </div>
        <div class="column">
          <a href="users.php" class="button is-rounded is-large is-fullwidth">Show Users</a>
        </div>
        <div class="column">
          <a class="button is-rounded is-large is-fullwidth">Show Image Storage in Database</a>
        </div>
      </div>
    </div>
  </section>
  </body>
</html>
