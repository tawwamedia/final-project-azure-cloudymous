<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloudymous Cognitive</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <link rel="stylesheet" href="css/bulma.min.css">
    <link rel="stylesheet" href="css/custom.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>

  <?php
    require_once "database/config.php";
  ?>

  <body>
    <section class="section login-absolute">
      <div class="columns is-centered">
        <div class="column is-half">
          <div class="container">
            <h1 class="title align-center">Please Login</h1>
            <div class="field">
              <p class="control has-icons-left has-icons-right">
                <input class="input" type="email" placeholder="Email">
                <span class="icon is-small is-left">
                  <i class="fas fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                  <i class="fas fa-check"></i>
                </span>
                </p>
            </div>
          <div class="field">
            <p class="control has-icons-left">
              <input class="input" type="password" placeholder="Password">
              <span class="icon is-small is-left">
                <i class="fas fa-lock"></i>
              </span>
              </p>
          </div>
          <div class="field is-grouped is-grouped-right">
            <p class="control">
              <button class="button is-primary">
                Login
              </button>
            </p>
          </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
