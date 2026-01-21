<?php

@include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    if (
        isset($_POST['teamname']) &&
        isset($_POST['p1']) &&
        isset($_POST['p2']) &&
        isset($_POST['p3']) &&
        isset($_POST['p4']) &&
        isset($_POST['p5']) &&
        isset($_POST['contact']) &&
        isset($_POST['game_selected'])
    ) {

        $teamname = $_POST['teamname'];
        $p1 = $_POST['p1'];
        $p2 = $_POST['p2'];
        $p3 = $_POST['p3'];
        $p4 = $_POST['p4'];
        $p5 = $_POST['p5'];
        $contact = $_POST['contact'];
        $game_selected = $_POST['game_selected'];

        $sql = "INSERT INTO `tournament` (`TEAM NAME`, `1st Player (captain)`, `2nd Player`, `3rd Player`, `4th Player`, `5th Player`, `Contact Number (for reg fee)`, `game_selected`)
                VALUES ('$teamname', '$p1', '$p2', '$p3', '$p4', '$p5', '$contact', '$game_selected')";
                
        $query = mysqli_query($conn, $sql);

        if ($query) {
            if ($game_selected == 'moba') {
                $_SESSION['game_selected'] = $game_selected;
                header('location:moba.php');
            } elseif ($game_selected == 'fps') {
                $_SESSION['game_selected'] = $game_selected;
                header('location:fps.php');
            } elseif ($game_selected == 'sandbox') {
                $_SESSION['game_selected'] = $game_selected;
                header('location:sandbox.php');
            }
        } else {
            echo 'Error Occurred';
        }
    }
}

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
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    <title>tournament registration</title>
</head>
<body>
    <div class="form-container">
        <form action="" method="POST">
            <h3>Registration form</h3>
            <input type="text" name="teamname" required placeholder="Enter your team name">
            <input type="text" name="p1" required placeholder="Enter your 1st player (captain)">
            <input type="text" name="p2" required placeholder="Enter your 2nd player">
            <input type="text" name="p3" required placeholder="Enter your 3rd player">
            <input type="text" name="p4" required placeholder="Enter your 4th player">
            <input type="text" name="p5" required placeholder="Enter your 5th player">
            <input type="text" name="contact" required placeholder="Enter contact number (for reg fee)">

            <select name="game_selected" id="mySelect">
                <option hidden disabled selected>Choose a Game to Compete</option>
                <option value="moba">MAGIC LEGENDS: MOBA</option>
                <option value="fps">TPJ: FPS</option>
                <option value="sandbox">ZH: SandBox</option>
            </select>

            <input type="submit" name="submit" value="SUBMIT" class="form-btn">
        </form>
    </div>
    
<script src="./assets/js/script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
