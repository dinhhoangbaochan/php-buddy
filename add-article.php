<?php

require 'includes/database.php';
require 'includes/header.php';

if ( $_SERVER['REQUEST_METHOD'] == 'POST' ) {
  $post_title = $_POST['title'];
  $post_content = $_POST['content'];
  $post_publish_date = $_POST['published_at'];
  
  $sql = "INSERT INTO article (title, content, published_at) VALUES ('{$post_title}', '{$post_content}', '{$post_publish_date}')";
  var_dump($sql);
  $query = mysqli_query( $conn, $sql );

  if ( $query === false ) {
    echo mysqli_error($conn);
  } else {
    $id = mysqli_insert_id($conn);
    echo $id;
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