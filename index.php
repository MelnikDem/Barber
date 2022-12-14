<?php
  $name = htmlspecialchars($_POST['name']);
  $mail  = htmlspecialchars($_POST['mail']);
  $comment = htmlspecialchars($_POST['comment']);

  echo  $name, $mail, $comment;
?>