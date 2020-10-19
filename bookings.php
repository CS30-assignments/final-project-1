<?php

// call file with database connection
include('connect-db.php');


// selection variables set to empty
$room_type = $check_in = $check_out = $email_confirm =  '';

// errors
$errors = array('check-in' => '', 'check-out' => '', 'room-type' => '', 'email-confirm' => '');

// Take submitted informtation and put in selections
if (isset($_POST['submit-bookings'])) {

    // Check if check-in is empty
    if (empty($_POST['check-in'])) {
        $errors['check-in'] = 'An check in date is required <br />';
    } else {
        $check_in = $_POST['check-in'];
    }

    // Check if check-out is empty
    if (empty($_POST['check-out'])) {
        $errors['check-out'] = 'An check out date is required <br />';
    } else {
        $check_out = $_POST['check-out'];
    }

    // Check if email confirmation is empty
    if (empty($_POST['email-confirm'])) {
        $errors['email-confirm'] = 'An email is required <br />';
    } else {
        $email_confirm = $_POST['email-confirm'];
    }

    // // Check if check-in is empty
    // if ($_POST['room-select'] = "") {
    //     $errors['room-select'] = 'An room selection is required <br />';
    // } else {
    //     $room_select = $_POST['room-select'];
    // }


    // Check for errors
    if (array_filter($errors)) {
        echo "WE have a problem";
    } else {

        $check_in = mysqli_real_escape_string($connect, $_POST['check-in']);
        $check_out = mysqli_real_escape_string($connect, $_POST['check-out']);
        $room_type = mysqli_real_escape_string($connect, $_POST['room-type']);
        $email_confirm = mysqli_real_escape_string($connect, $_POST['email-confirm']);

        // create sql
        $sql = "INSERT INTO bookings_information(email_confirm, check_in, check_out, room_type) VALUES ('$email_confirm', '$check_in','$check_out','$room_type')";

        // save to database and then check
        if (mysqli_query($connect, $sql)) {
            header('Location: bookings.php');
        } else {
            echo 'query errrrooorr';
        }
    }
}

// query emails from both tables
$sql_booking = "SELECT email_confirm, check_in, check_out, room_type FROM bookings_information";
// -- WHERE email_confirm = $user


// make the query and get results
$result = mysqli_query($connect, $sql_booking);

// fetch results as an array
$userBook = mysqli_fetch_all($result, MYSQLI_ASSOC);

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
    <title>Bookings</title>
</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>

    <?php ?>
    <!-- Things to include -->
    <h2>Booking Information</h2>

    <!-- What to do-->

    <!-- Selection -->
    <div class="container">
        <div class="container  float-right w-25">
            <h3>Booked:</h3>
            <div class="container">
                <?php foreach ($userBook as $book) { ?>
                    <?php if ($email == $book['email_confirm']) { ?>
                        <div class="container border">
                            <?php
                            echo $book['check_in'] . '</br >';
                            echo $book['check_out'] . '</br >';
                            echo $book['room_type'] . '</br >';
                            ?>

                            <form class="btn-sm" action="#" method="POST">
                                <input class="btn btn-danger" type="submit" name="delete-booking" value="Delete">
                            </form>
                        </div>

                    <?php } ?>

                <?php } ?>


            </div>
        </div>
    </div>

    <form method="POST">

        <!-- Check In -->
        <div class="container p-5">
            <label>Check In: </label>
            <input type="date" name="check-in">

            <label>Check Out: </label>
            <input type="date" name="check-out">
        </div>


        <!-- Room Select -->
        <div class="container p-5">
            <label>Choose a Room</label>
            <select name="room-type">
                <option value="Room-1">Room-1</option>
                <option value="Room-2">Room-2</option>
                <option value="Room-3">Room-3</option>
                <option value="Room-4">Room-4</option>
            </select>
        </div>

        <div class="container p-5">
            Email Confirmation: <input type="text" name="email-confirm">
        </div>

        <br>
        <div class="container p-5">
            <input type="submit" class="btn btn-success" name="submit-bookings" value="Submit">
        </div>

    </form>


    <br>

    <!-- Popper and jQuery files -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>