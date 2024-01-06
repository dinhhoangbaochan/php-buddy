<?php

require 'database.php';

$sql = "SELECT * FROM article";
$results = mysqli_query( $conn, $sql );
$articles = mysqli_fetch_all( $results, MYSQLI_ASSOC );

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Blog</title>
</head>
<body>
  <h1>My Blog</h1>
  <ul>
    <?php 
      foreach ($articles as $index => $article) {
        ?>
          <li>
            <h2>
              <a href="single.php?id=<?php echo $article['id']; ?>">
                <?php echo $article['title']; ?>
              </a>
            </h2>
            <p><?php echo $article['content']; ?></p>
          </li>
        <?php
      }
    ?>
  </ul>
</body>
</html>