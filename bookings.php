<?php

// call file with database connection
include('connect-db.php');



// check if email from current session matches booking info


// query emails from both tables
$sql_booking = "SELECT email_confirm, check_in, check_out, room_type FROM bookings_information WHERE email_confirm = ";


// make the query and get results
$result = mysqli_query($connect, $sql_booking);

// fetch results as an array
$userEmail = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result
mysqli_free_result($result);

// close connection
mysqli_close($connect);


// selection variables set to empty
$room_select = $check_in = $check_out = $email_confirm =  '';

// errors
$errors = array('check-in' => '', 'check-out' => '', 'room-select' => '', 'email-confirm' => '');

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
        $room_select = mysqli_real_escape_string($connect, $_POST['room-select']);
        $email_confirm = mysqli_real_escape_string($connect, $_POST['email-confirm']);

        // create sql
        $sql = "INSERT INTO bookings_information(email_confirm, check_in, check_out, room_type) VALUES ('$email_confirm', '$check_in','$check_out','$room_select')";

        // save to database and then check
        if (mysqli_query($connect, $sql)) {
            header('Location: bookings.php');
        } else {
            echo 'query errrrooorr';
        }
    }
}

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
            <div>
                <?php
                    // Display previous booking information
                    foreach ($userEmail as $email) {
                        echo $email['email_confirm'] . '</br >';
                        echo $email['check_in'] .  '</br >';
                        echo $email['check_out'] . '</br >';
                        echo  $email['room_type'] . '</br >';
                    }
                ?>


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
            <select name="room-select">
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
            <input type="submit" class="btn btn-danger" name="submit-bookings" value="Submit">
        </div>

    </form>


    <br>

    <!-- Popper and jQuery files -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>