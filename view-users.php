<?php 

// call file with database connection
include('connect-db.php');

// write query for all user information
$sql = "SELECT id, names, email, passwords FROM user_information";

// make the query and get results
$result = mysqli_query($connect, $sql);

// fetch results as an array
$user_information = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result
mysqli_free_result($result);

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
    <h1 class="display-3">Name</h1>

    <!-- Navigation bar for users names and bookings -->
    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar nav">
            <li class="nav-item  px-5">
                <a class="nav-link" href="view-users.php">Guest Information</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="explore.php">Guest Bookings</a>
            </li>
            
        </ul>
    </nav>


    <!-- Display each user and  -->
</body>

</html>