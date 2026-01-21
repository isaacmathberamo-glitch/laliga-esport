<?php
require_once 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['ID'])) {
    $tournamentId = mysqli_real_escape_string($conn, $_POST['ID']);

    $query = "DELETE FROM tournament WHERE ID = '$tournamentId'";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Failed: " . mysqli_error($conn));
    } else {
        echo "Record deleted successfully";
    }

    mysqli_close($conn);
} else {
    echo "Invalid request";
}
?>
