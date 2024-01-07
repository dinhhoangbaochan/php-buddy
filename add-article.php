<?php

require 'includes/database.php';
require 'includes/header.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $post_title = $_POST['title'];
  $post_content = $_POST['content'];
  $post_publish_date = $_POST['published_at'];
  
  $sql = "INSERT INTO article (title, content, published_at) 
          VALUES (?, ?, ?)";

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


?>

<h1>Add New Article</h1>

<form method="post">

  <div class="title">
    <label for="title">Title</label>
    <input type="text" name="title" id="title">
  </div>

  <div class="title">
    <label for="content">Content</label>
    <textarea name="content" id="content" cols="30" rows="10"></textarea>
  </div>

  <div class="datetime">
    <label for="">Written Date</label>
    <input type="datetime-local" name="published_at" id="">
  </div>

  <div class="">
    <button>Submit</button>
  </div>

</form>