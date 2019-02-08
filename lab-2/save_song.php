<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Saving Your Song ...</title>
  </head>
  <body>

    <?php
      $name = $_POST ['name'];
      $age = $_POST ['age'];
      $fav_song = $_POST ['fav_song'];

      //connect to database
      $db = new PDO('mysql:host=localhost;dbname=cooldb', 'root', '');

      // set up SQL query
      $sql = "INSERT INTO songs (name, age, fav_song) VALUES (:name, :age, :fav_song)";

      // prepare query
      $cmd = $db->prepare($sql);

      // blind parameters
      $cmd->bindParam(':name', $name);
      $cmd->bindParam(':age', $age);
      $cmd->bindParam(':fav_song', $fav_song);

      // run the query
      $cmd->execute();

      echo "<p>Your info is secure, $name</p>";

      // close db connection
      $cmd->closeCursor();

    ?>

  </body>
</html>
