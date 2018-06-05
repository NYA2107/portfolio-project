<?php
  require 'query.php';

  session_start();
  if(!isset($_SESSION['imageid'])){
    header('Location: index.php');
  }

  $query = new Query($_SESSION['imageid']);
  $comments = $query->getImgComments();
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
          <img class="img" src="img/1.jpg">
      </div>
      <div class="comment-container flex flex-wrap">
        <div class="comment-show-container flex flex-j-c flex-al-c flex-wrap">
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
          <form action="/action_page.php" class="flex flex-j-c flex-al-c flex-wrap">
            <input id="name" type="text" name="firstname" placeholder="Input your name here">
            <textarea id="comment" name="comment" form="usrform" placeholder="Add comment"></textarea>
            <input id="submit" type="submit" value="Submit">
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
