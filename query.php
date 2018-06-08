<?php
  class Query{
    function __construct ($imgId){
      $this->imgId = $imgId;
      $this->connection = new ConnectionDb();
    }
    function getImgUrl(){
      $sql = "SELECT image_url FROM image WHERE image_id ='".$this->imgId."';";
      $result = $this->connection->conn->query($sql);
      while($row = $result->fetch_assoc()){
        return $row["image_url"];
      }
    }
    function getImgComments(){
      $resultCol = array();
      $sql = "SELECT comment_name, comment_text FROM image, comment WHERE image_id = fk_image_id AND fk_image_id ='".$this->imgId."';";
      $result = $this->connection->conn->query($sql);
      while($row = $result->fetch_assoc()){
        array_push($resultCol, new Node($row['comment_name'],$row['comment_text']));
      }
      return $resultCol;
    }
    function setImgComment($name, $commentText){
      $sql = "INSERT INTO `comment`(`comment_name`, `comment_text`, `fk_image_id`) VALUES ('".$name."','".$commentText."','".$this->imgId."');";
      $this->connection->conn->query($sql);
    }
  }

  class ConnectionDb{
    function __construct(){
      $this->servername = "localhost";
      $this ->username = "root";
      $this ->password = "";
      $this->conn = new mysqli($this->servername, $this->username, $this->password, 'portfolio');
    }
  }

  class Node{
    function __construct($name,$comment){
      $this->name = $name;
      $this->comment = $comment;
    }
  }
 ?>
