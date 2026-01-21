<?php
    require_once 'config.php';
    require_once 'functions.php';

    $result = display_data();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>View Records</title>
    <style>
        body {
            padding-top: 20px;
            background-color: #A0A0A0;
        }
        h1 {
            text-align: center;
            color: orange;
        }
        .card {
            margin-top: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-body {
            padding: 20px;
        }
        .table {
            background-color: #fff;
        }
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
            white-space: nowrap;
        }
        .btn {
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .btn-edit, .btn-delete {
            margin-right: 5px;
        }

        .go-back {
            padding: 8px 16px;
            font-size: 14px;
            border-radius: 4px;
            margin-left: 20px;
            margin-top: 300px;
            background: orange;
            color: white;
        }

        .go-back:hover {
            background-color: #994C00;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1>TOURNAMENT LIST</h1>
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>ID</th>
                                        <th>Team Name</th>
                                        <th>1st Player (Captain)</th>
                                        <th>2nd Player</th>
                                        <th>3rd Player</th>
                                        <th>4th Player</th>
                                        <th>5th Player</th>
                                        <th>Contact Number</th>
                                        <th>Games Selected</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = mysqli_fetch_assoc($result)) { ?>
                                        <tr>
                                            <td><?php echo $row['ID']; ?></td>
                                            <td><?php echo $row['TEAM NAME']; ?></td>
                                            <td><?php echo $row['1st Player (captain)']; ?></td>
                                            <td><?php echo $row['2nd Player']; ?></td>
                                            <td><?php echo $row['3rd Player']; ?></td>
                                            <td><?php echo $row['4th Player']; ?></td>
                                            <td><?php echo $row['5th Player']; ?></td>
                                            <td><?php echo $row['Contact Number (for reg fee)']; ?></td>
                                            <td><?php echo $row['game_selected']; ?></td>
                                            <td>
                                                <a href="update.php?ID=<?php echo $row['ID']; ?>" class="btn btn-primary btn-edit">Edit</a>
                                                <button class="btn btn-danger btn-delete" data-id="<?php echo $row['ID']; ?>">Delete</button>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="adminpage.php" class="go-back btn ">GO BACK</a>

    <!-- JavaScript for Delete Button -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle delete button click
            $('.btn-delete').click(function() {
                if (confirm('Are you sure you want to delete this record?')) {                   
                    var tournamentId = $(this).data('id');

                    // AJAX request to delete.php
                    $.ajax({
                        type: 'POST',
                        url: 'delete.php',
                        data: { ID: tournamentId },
                        success: function(response) {
                            alert(response); 
                            location.reload(); 
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                            alert('Error deleting record. Please try again.');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>


