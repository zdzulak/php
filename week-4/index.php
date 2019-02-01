<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Let's Connect</title>
  </head>
  <body>

    <?php
    try {
      // try and connect to the database

      $db = new PDO('mysql:host=localhost;dbname=cooldb', 'root', '');
      echo "<p> You are connected! Cowabunga! </p>";
    }
    catch(PDOException $e) {
      echo "<p> Sorry, you can't connect. </p>";
      echo $e;
    }
    ?>

  </body>
</html>
