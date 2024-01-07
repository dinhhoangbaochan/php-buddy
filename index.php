<?php

require 'includes/database.php';

$conn = get_db();
$sql = "SELECT * FROM article";
$results = mysqli_query( $conn, $sql );
$articles = mysqli_fetch_all( $results, MYSQLI_ASSOC );

require 'includes/header.php'

?>

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
<?php require 'includes/footer.php' ?>