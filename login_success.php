
<!--login success and redirection page-->

<?php

  session_start();
  echo "<script type='text/javascript'>alert('Login successfull..Chatroom loading!');</script>";
  header("location:chat.php?");

?>
