<?php
  require 'query.php';

  session_start();
  if(!isset($_SESSION['imageid'])){
    header('Location: index.php');
  }

  $query = new Query($_SESSION['imageid']);

  $comments = $query->getImgComments();
  $imageUrl = $query->getImgUrl();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/reusable-style.css">
    <link rel="stylesheet" href="css/portfolio-style.css">
  </head>
  <body class="flex flex-j-c flex-al-c">
    <div class="main-container flex flex-j-c flex-al-c flex-wrap">
      <div class="img-container flex flex-j-c flex-al-c flex-wrap">
          <input id="back-button" type="button" name="" value="Back" onclick="back()">
          <?php
            echo '<img class="img" src="'.$imageUrl.'">';
           ?>

      </div>
      <div class="comment-container flex flex-wrap">
        <div class="comment-show-container flex flex-j-c flex-al-s flex-wrap ">
          <!-- comment here -->
          <?php
            foreach ($comments as $key => $com) {
              echo '<div class="comment-card">';
              echo  '<div class="comment-name">';
              echo    '<h4>'.$com->name.'</h4>';
              echo  '</div>';
              echo '<div class="comment-text">';
              echo  '<p>'.$com->comment.'</p>';
              echo '</div>';
              echo '</div>';
            }
           ?>
          <!-- <div class="comment-card">
            <div class="comment-name">
              <h4>Your Name</h4>
            </div>
            <div class="comment-text">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div> -->
          <!-- comment here -->

        </div>
        <div class="comment-box-container flex flex-j-c flex-al-c">
          <form action="blank.php" class="flex flex-j-c flex-al-c flex-wrap" method='get'>
            <input id="name" type="text" name="name" placeholder="Input your name here">
            <textarea id="comment" name="comment" placeholder="Add comment"></textarea>
            <input id="submit" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
    <script language="javascript" type="text/javascript" src="js/sketch.js"></script>
  </body>

</html>
