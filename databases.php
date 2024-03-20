<!-- DB connection file -->
<?php 
      $servername = "192.168.88.90";     // Host
      $username = "root";           //  Login
      $password = "";          //   Password
      $dbname = "phonedirectory"; //    DB name
 
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $sth = $conn->prepare("SELECT * FROM `users` ORDER BY `id`");
      $sth->execute();
      $list = $sth->fetchAll(PDO::FETCH_ASSOC);
?>