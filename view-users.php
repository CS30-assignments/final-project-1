<?php

// call file with database connection
include('connect-db.php');

// write query for all user information
$sql = "SELECT id, names, email FROM user_information";

// make the query and get results
$result = mysqli_query($connect, $sql);

// fetch results as an array
$user_information = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result
mysqli_free_result($result);

// write query for all user information
$sql_booking = "SELECT id, email_confirm, check_in, check_out, room_type FROM bookings_information";

// make the query and get results
$result_booking = mysqli_query($connect, $sql_booking);

// fetch results as an array
$userBook = mysqli_fetch_all($result_booking, MYSQLI_ASSOC);

// free result
mysqli_free_result($result_booking);

// close connection
mysqli_close($connect);

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Main Heading  -->
    <h1 class="display-3">Mungara Suites</h1>

    <!-- Navigation bar for users names and bookings -->
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar nav">
            <li class="nav-item  px-5">
                <a class="nav-link" href="view-users.php">Guest Information</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="guest-bookings.php">Guest Bookings</a>
            </li>

            <li class="nav-item px-5">
                <a class = "nav-link" href="index.php">Back to Login</a>
            </li>
        </ul>
    </nav>


    <!-- Display each user and  -->
    <div>
        <?php foreach ($user_information as $user) { ?>
            <div class="admin-user-border">
                <div class="admin-user-info">
                    <?php echo $user['names'] . ':' . '</br>'; ?>
                    <?php foreach ($userBook as $book) { ?>

                        <?php if ($user['email'] == $book['email_confirm']) { ?>
                            <div class="each-booking">

                                <?php
                                echo 'Check In: ' . $book['check_in'] . '</br>';
                                echo 'Check Out: ' . $book['check_out'] . '</br>';
                                echo 'Room Type: ' . $book['room_type'] . '</br>';
                                ?>
                            </div>

                        <?php } ?>

                    <?php } ?>

                </div>
            </div>


        <?php  } ?>

    </div>
</body>

</html>