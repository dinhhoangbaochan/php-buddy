<?php

require 'includes/database.php';

$conn = get_db();

$sql = "SELECT * FROM article WHERE id={$_GET['id']}";
$results = mysqli_query( $conn, $sql );
$articles = mysqli_fetch_all( $results, MYSQLI_ASSOC );

?>

