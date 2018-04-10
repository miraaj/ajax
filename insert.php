<?php
  require('db.php');
  $name = ($_POST['name']);
  $sql = "insert into details (name) values ('$name')";

  if($conn->query($sql) === TRUE){

  }else{
    echo  "error";
  }
?>