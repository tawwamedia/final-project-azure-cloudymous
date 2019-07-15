<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
     <h1 class="title has-text-centered">
        Hello Cloud!
      </h1>
      <p class="subtitle has-text-centered">
        Home Page using Bulma
        <?php
        $filename = "Uung.jpg";
        $fileExt = explode(".", $filename);
        print_r(end($fileExt));
        ?>
      </p>
    </div>
  </section>
  </body>
</html>
