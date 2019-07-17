<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <style>
  .container {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 20%;
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
  }
  </style>
  <body>
  <section class="section">
    <div class="container">
     <h1 class="title has-text-centered">
        Login
      </h1>
      <p class="subtitle has-text-centered">
        Please Login
      </p>

      <div class="field">
        <div class="control">
          <input class="input" type="text" placeholder="Username">
        </div>
      </div>
      <div class="field">
        <div class="control">
          <input class="input" type="password" placeholder="Password">
        </div>
      </div>
      <div class="field is-grouped is-grouped-centered">
        <p class="control">
          <button class="button is-success">
            Login
          </button>
        </p>
      </div>


    </div>
  </section>
  </body>
</html>
