<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload File</title>
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
    .notification{
      position: absolute;
      top: 50%;
      left: 50%;
      -moz-transform: translateX(-50%) translateY(-50%);
      -webkit-transform: translateX(-50%) translateY(-50%);
      transform: translateX(-50%) translateY(-50%);
    }
  </style>
  <body>
  <div class="container">
    <div class="level">
      <div class="level-item">
        <form action="classes/Uploader.class.php" method="POST" enctype="multipart/form-data">
          <div class="field">
            <input class="input" type="file" name="file">
            <div class="field is-grouped is-grouped-centered">
              <p class="control">
                <button class="button is-primary" type="submit" name="submit">
                  Submit
                </button>
              </p>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <figure class="image is-128x128">
          <img src="https://bulma.io/images/placeholders/128x128.png">
        </figure>
      </div>
    </div>
  </div>
  <?php
    if ($_GET["upload"]=="success") {
        echo '<div class="notification">
                <button class="delete"></button>
                Upload Success
              </div>';
    }
  ?>
  </body>
  <script src="node_modules/bulma/bulma.js"></script>
</html>
