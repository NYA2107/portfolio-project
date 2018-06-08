<?php
  require "query.php";
  session_start();
  $query = new Query($_SESSION['imageid']);
  if(isset($_GET['name'])&&isset($_GET['comment'])){
    $name = $_GET['name'];
    $commentText = $_GET['comment'];
    $query->setImgComment($name, $commentText);
  }

  header('Location: portfolio.php');
 ?>
