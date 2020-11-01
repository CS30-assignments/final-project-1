<?php 

// call file with database connection
include('connect-db.php');

// call file with functions
include('functions.php');


if(isset($_POST['submit-guest-booking'])){
    bookGuest($_POST['check-in'], $_POST['check-out'], $_POST['email-confirm'], $_POST['room-type'], $fillIn, $connect);
}

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
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar nav">
            <li class="nav-item  px-5">
                <a class="nav-link" href="view-users.php">Guest Information</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="guest-bookings.php">Guest Bookings</a>
            </li>

            <li class="nav-item px-5">
                <a class = "nav-link" href="index.php">Back to Home</a>
            </li>
        </ul>

        
    </nav>

    <!-- Book a Guest -->

    <div class="container">
        <form id="booking-form" class="container p-4" method="POST">

            <!-- Check In -->
            <div class=" p-2">
                <label>Check In: </label>
                <input type="date" name="check-in">

                <label>Check Out: </label>
                <input type="date" name="check-out">
            </div>


            <!-- Room Select -->
            <div class="py-5">
                <label>Choose a Room</label>
                <select name="room-type">
                    <option value="Room-1">Standard Room-1</option>
                    <option value="Room-2">Standard Room-2</option>
                    <option value="Package-1">Package-1</option>
                    <option value="Package-2">Package-2</option>
                    <option value="Package-3">Package-3</option>
                </select>
            </div>

            <div>
                Email Confirmation: <input type="text" name="email-confirm">
                <p class="text-secondary">Careful! The booking will be saved to the email that you enter.</p>
            </div>

            <br>
            <div>
                <input type="submit" class="btn btn-success" name="submit-guest-booking" value="Submit">
            </div>

        </form>
    </div>





</body>

</html>