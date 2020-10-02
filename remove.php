<?php

if(isset($_POST['remove']))
{  include_once 'dbh.php';
    session_start();
   $pdid=  $_SESSION['todoid'];
  $sql = "DELETE FROM todo WHERE todoid ='$pdid';";
  mysqli_query($conn,$sql);
  header("Location: wall.php?item_removed_successfully");
}
?>