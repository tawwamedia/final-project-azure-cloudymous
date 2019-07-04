<?php
   // PHP Data Objects(PDO) Sample Code:
   try {
       $conn = new PDO("sqlsrv:server = tcp:cloudymousappserv.database.windows.net,1433; Database = dicodingdb", "cloudymous", "imran*01");
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
   catch (PDOException $e) {
       print("Error connecting to SQL Server.");
       die(print_r($e));
   }
?>
