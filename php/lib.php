<?php
  function dbconnect($pw) {
    $username = "root";
    $password = $pw;

    try {
      $conn = new PDO('mysql:host=localhost;dbname=tacotruck', $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }

  function checkCredentials($user, $pw) {
    dbconnect("password");

    try {
      $stmt = $conn->prepare('SELECT * FROM Users WHERE EmailAddress = :email AND SELECT * FROM Users WHERE Password = :pw');
      $stmt->execute(array('email' => $user, 'pw' => $pw));

      $result = $stmt->fetchAll();

      if(count($result))
        return true;
      else
        return false;

    } catch(PDOException $e) {
      echo 'ERROR: ' . $e->getMessage();
    }
  }
  ?>