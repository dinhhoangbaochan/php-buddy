<?php

require 'includes/database.php';

// Create an array to store error messages
$errors = [];

// Init variables to avoid warning message
$post_title = ''; 
$post_content = ''; 
$post_publish_date = '';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $conn = get_db();
  
  $post_title = $_POST['title'];
  $post_content = $_POST['content'];
  $post_publish_date = $_POST['published_at'];

  // Validate if title and content are empty
  if ( $post_title == '' ) {
    $errors[] = 'Title is required';
  }

  if ( $post_content == '' ) {
    $errors[] = 'Content is required';
  }

  // For publish date, it is not required, so we need to check that if it has value, we need to validate if the date is correct format
  if ( $post_publish_date != '' ) {
    $post_publish_date = str_replace('T', ' ', $post_publish_date);
    $date_time = date_create_from_format("Y-m-d H:i", $post_publish_date);


    if ( $date_time == false ) {
      $errors[] = 'Date time is invalid';
      var_dump($date_time);
      var_dump($post_publish_date);
    }

  }

  if ( empty( $errors ) ) {
    $sql = "INSERT INTO article (title, content, published_at) VALUES (?, ?, ?)";
    $prepared_statement = mysqli_prepare($conn, $sql);  

    if ( $prepared_sql === false ) {
      echo mysqli_error($conn);
    } else {
      mysqli_stmt_bind_param( $prepared_statement, "sss", $post_title, $post_content, $post_publish_date );
  
      if ( mysqli_stmt_execute( $prepared_statement ) ) {
        $id = mysqli_insert_id($conn);
        echo $id;
      } else {
        echo mysqli_stmt_error( $prepared_statement );
      }
  
    }
  }

}


?>

<h1>Add New Article</h1>

<ul>
  <?php 
    foreach( $errors as $error_message ) {
      ?>
        <li><?php echo $error_message; ?></li>
      <?php
    }
  ?>
</ul>

<form method="post">

  <div class="title">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="<?php echo $post_title ?>">
  </div>

  <div class="title">
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10">
      <?php echo $post_content; ?>
    </textarea>
  </div>

  <div class="datetime">
    <label for="">Written Date</label>
    <input type="datetime-local" name="published_at" id="">
  </div>

  <div class="">
    <button>Submit</button>
  </div>

</form>