<?php 

  require_once 'config.php';

  function display_data(){
    global $conn;
    $query = "select * from tournament";
    $result = mysqli_query($conn,$query);
    return $result;
  }

?>