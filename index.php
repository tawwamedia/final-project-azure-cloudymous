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
    <div class="container">
     <h1 class="title has-text-centered">
        Hello Cloud!
      </h1>
      <p class="subtitle has-text-centered">
        Home Page using Bulma
      </p>
      <div class="columns">
        <div class="column">
          Add User to Database
          <a class="button is-rounded is-large is-fullwidth">Large</a>
        </div>
        <div class="column">
          Upload Image to Server
          <a class="button is-rounded is-large is-fullwidth">Large</a>
        </div>
        <div class="column">
          Show Users
          <a class="button is-rounded is-large is-fullwidth">Large</a>
        </div>
        <div class="column">
          Show Image Storage in Database
          <a class="button is-rounded is-large is-fullwidth">Large</a>
        </div>
      </div>
    </div>
  </section>
  </body>
</html>
