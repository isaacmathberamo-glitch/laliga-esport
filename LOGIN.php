<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = md5($_POST['password']);
    $cpass = md5($_POST['cpassword']);
    $user_type = $_POST['user_type'];

    $select = " SELECT * FROM login_form WHERE email = '$email' && password = '$pass' ";
    $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);

        if($row['user_type'] == 'admin'){

            $_SESSION['admin_name'] = $row['name'];
            header('location:adminpage.php');     

    }elseif($row['user_type'] == 'user'){

        $_SESSION['user_name'] = $row['name'];
        header('location:index2.php');

    }

  }else{
    $error[] = 'incorrect email or password!';
  } 
};

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css2/reglog.css">
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap"
    rel="stylesheet">
    <title>login form</title>
</head>

<body>

<div class="form-container">

  <form action="" method="post">
    <h3>login now</h3>
    <?php
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>
    <input type="email" name="email" required placeholder="enter your email">
    <input type="password" name="password" required placeholder="enter your password">
    <input type="submit" name="submit" value="LOG IN" class="form-btn">
    <p>don't have an account? <a href="REGISTRATION.php">register now</a></p>
  </form>   
</body>

<script src="./assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


</html>