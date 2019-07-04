<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Management</title>
    <link rel="stylesheet" href="css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
      <h1 class="title">
        <?php
          echo "User Account";
        ?>
      </h1>
    <form method="post" action="user.php" enctype="multipart/form-data">
      <div class="field">
        <p class="control has-icons-left has-icons-right">
          <input class="input" type="email" name="email" id="email" placeholder="Email">
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
          <input class="input" type="password" name="password" id="password" placeholder="Password">
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </p>
      </div>
      <div class="field is-grouped is-grouped-centered">
        <p class="control">
          <button class="button is-success" type="submit" name="adduser">
            Add User
          </button>
        </p>
        <p class="control">
          <button class="button is-success" type="submit" name="showusers">
            Show Users
          </button>
        </p>
      </div>
    </form>
    </div>
  </section>

  <?php

  try {
      $conn = new PDO("sqlsrv:server = tcp:cloudymousappserv.database.windows.net,1433; Database = dicodingdb", "cloudymous", "imran*01");
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }
  catch (PDOException $e) {
      print("Error connecting to SQL Server.");
      die(print_r($e));
  }

    if (isset($_POST['adduser'])) {
  		try {
  			$email = $_POST['email'];
  			$password = $_POST['password'];

  			$sql_insert = "INSERT INTO user (user_email, user_password)
  										VALUES (?,?)";
  			$stmt = $conn->prepare($sql_insert);
  			  $stmt->bindValue(1, $email);
  				$stmt->bindValue(2, $password);
  				$stmt->execute();
  		} catch(Exception $e) {
  				echo "Failed: " . $e;
  		}
  		echo "<h3>Your Message Send</h3>";
  	} elseif (isset($_POST['showusers'])) {
  			try {
  				$sql_select = "SELECT * FROM user";
  				$stmt = $conn->query($sql_select);
  				$users = $stmt->fetchAll();
  				if(count($users) > 0) {
  					echo "<h2>Message Received:</h2>";
  					echo "<table>";
  					echo "<tr><th>No</th>";
  					echo "<th>Email</th></tr>";
  					foreach ($users as $user) {
  						echo "<tr><td>".$user['user_id']."</td>";
  						echo "<td>".$user['user_email']."</td></tr>";
  					}
  					echo "</table>";
  				} else {
  						echo "<h3>No Users!.</h3>";
  				}
  			} catch (\Exception $e) {
  				echo "Failed: " . $e;
  			}

  	}
  ?>
  </body>
</html>
