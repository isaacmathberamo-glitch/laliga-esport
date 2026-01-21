<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
    header('location:LOGIN.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css2/reglog.css">
    <title>admin page</title>
</head>

<body>

<div class="container">
    <div class="content">
        <h3>hi, <span>admin</span></h3>
        <h1>welcome <span><?php echo $_SESSION['admin_name']?></span></h1>
        <p>this is an admin page</p>
        <a href="crud.php" class="btn">CRUD table</a>
        <a href="logout.php" class="btn">logout</a>
    </div>
</div>
    
</body>
</html>