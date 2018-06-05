<?php
  session_start();
  $img = $_GET['img_id'];
  $_SESSION['imageid'] = $img;
  header('Location: portfolio.php');
 ?>
