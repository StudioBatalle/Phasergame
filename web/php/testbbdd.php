<?php
/* Servidor antiguo Freemysqlhosting.net, cuenta inactiva */
  $servername = "sql11.freemysqlhosting.net";
  $dbdname = "sql11409601";
  $username = "sql11409601";
  $password = "K7C9EmrCjn";

/* Nueva base de datos de prueba en remotemysql.com */
  $servername = "remotemysql.com";
  $dbdname = "b7FkF4V4fU";
  $username = "b7FkF4V4fU";
  $password = "gijTBONOIC";

  echo "Voy a conectar con el servidor ".$servername." <br>";

  //phpinfo();
  //exit;
  
  try {
      $mbd = new PDO('mysql:host=$servername;dbname=$dbdname', $username, $password);
      /*
      foreach($mbd->query('SELECT * from users') as $fila) {
          print_r($fila);
      }
      */
      $mbd = null;
  } catch (PDOException $e) {
      print "¡Error!: " . $e->getMessage() . "<br/>";
      die();
  }

  // Create connection
  $conn = new mysqli($servername, $username, $password);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo "Connected successfully";
?>
