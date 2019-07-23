<?php

class User extends Db {

  public function getAllUsers(){
    $stmt = $this->connect()->query("SELECT * FROM pengguna");
    while ($row = $stmt->fetch()){
      $id = $row[id];
      $username = $row['username'];
      $created = $row['created_at'];
      echo "<tr>
              <th>".$id."</th>
              <td>".$username."</td>
              <td>".$created."</td>
            </tr>";
    }
  }

  public function addNewUser($username,$password){
    $user = strtolower(stripslashes($username));
    $pass = password_hash($password, PASSWORD_DEFAULT);
    try {
      $sql = "INSERT INTO pengguna (username, password) VALUES (:username,:password)";
      $stmt = $this->connect()->prepare($sql);

      $stmt->bindParam(':username', $user, PDO::PARAM_STR);
      $stmt->bindParam(':password', $pass, PDO::PARAM_STR);
      $stmt->execute();
      header ("Location: ../adduser.php?status=success");
    } catch (\Exception $e) {
      echo "Error". $e->getMessage();
    }

  }

}

?>
