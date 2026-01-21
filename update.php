<?php
require_once 'config.php'; 
require_once 'functions.php';


$row = [];


if(isset($_GET['ID'])){
    $UserID = $_GET['ID'];

    
    $query = "SELECT * FROM `tournament` WHERE `ID` = '$UserID'";
    $result = mysqli_query($conn, $query);

    
    if($result){
       
        $row = mysqli_fetch_assoc($result);
    } else {
        
        die("Query failed: " . mysqli_error($conn));
    }
}


if(isset($_POST['update_tournament'])){
    
    if(isset($_GET['ID'])){
        $UserID = $_GET['ID'];

        $teamname = $_POST['tm'];
        $p1 = $_POST['t1'];
        $p2 = $_POST['t2'];
        $p3 = $_POST['t3'];
        $p4 = $_POST['t4'];
        $p5 = $_POST['t5'];
        $contact = $_POST['contact'];
        $game_selected = $_POST['game'];

        
        $query = "UPDATE `tournament` SET 
                  `TEAM NAME` = '$teamname', 
                  `1st Player (captain)` = '$p1',
                  `2nd Player` = '$p2', 
                  `3rd Player` = '$p3', 
                  `4th Player` = '$p4', 
                  `5th Player` = '$p5',
                  `Contact Number (for reg fee)` = '$contact', 
                  `game_selected` = '$game_selected' 
                  WHERE `ID` = '$UserID'";

        $result = mysqli_query($conn, $query);

        if($result){
            header('Location: update.php?ID=' . $UserID . '&update_msg=You have successfully updated the tournament');
            exit;
        } else {
            die("Update query failed: " . mysqli_error($conn));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css4/tournalist.css">
    <title>Update Team Information</title>
</head>
<body>
    <div class="container">
        <h2>EDIT TEAM INFORMATION</h2>
        <form action="update.php?ID=<?php echo isset($_GET['ID']) ? $_GET['ID'] : ''; ?>" method="post">
            <label for="tm">TEAM NAME</label>
            <input type="text" id="tm" name="tm" value="<?php echo isset($row['TEAM NAME']) ? htmlspecialchars($row['TEAM NAME']) : ''; ?>">

            <label for="t1">1st Player (team captain)</label>
            <input type="text" id="t1" name="t1" value="<?php echo isset($row['1st Player (captain)']) ? htmlspecialchars($row['1st Player (captain)']) : ''; ?>">

            <label for="t2">2nd Player</label>
            <input type="text" id="t2" name="t2" value="<?php echo isset($row['2nd Player']) ? htmlspecialchars($row['2nd Player']) : ''; ?>">

            <label for="t3">3rd Player</label>
            <input type="text" id="t3" name="t3" value="<?php echo isset($row['3rd Player']) ? htmlspecialchars($row['3rd Player']) : ''; ?>">

            <label for="t4">4th Player</label>
            <input type="text" id="t4" name="t4" value="<?php echo isset($row['4th Player']) ? htmlspecialchars($row['4th Player']) : ''; ?>">

            <label for="t5">5th Player</label>
            <input type="text" id="t5" name="t5" value="<?php echo isset($row['5th Player']) ? htmlspecialchars($row['5th Player']) : ''; ?>">

            <label for="contact">Contact Number</label>
            <input type="text" id="contact" name="contact" value="<?php echo isset($row['Contact Number (for reg fee)']) ? htmlspecialchars($row['Contact Number (for reg fee)']) : ''; ?>">

            <label for="game">Games Selected</label>
            <input type="text" id="game" name="game" value="<?php echo isset($row['game_selected']) ? htmlspecialchars($row['game_selected']) : ''; ?>">
            
            <input type="submit" class="btn button" name="update_tournament" value="UPDATE">
            <a href="crud.php" class="btn btn-back">GO BACK</a>
        </form>
    </div>
</body>
</html>
