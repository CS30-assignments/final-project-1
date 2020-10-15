<?php

// selection variables set to empty
$room_select = $check_in = $check_out = '';

// Take submitted informtation and put in selections
if (isset($_POST['submit-bookings'])) {
    // assign variables the data user selects
    $room_select = $_POST['room-select'];
    $check_in = $_POST['check-in'];
    $check_out = $_POST['check-out'];
}

// post everything to submit to database

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

    <!-- Things to include -->
    <h2>Booking Information</h2>

    <!-- What to do-->

    <!-- Selection -->
    <div class="container">
        <div class="container border float-right w-25">
            <h3>Confirmation:</h3>
            <p>
                Check In: <span><?php echo $check_in; ?></span>
            </p>

            <p>
                Check Out: <span><?php echo $check_out; ?></span>
            </p>

            <p>
                Room Select: <span><?php echo $room_select; ?></span>
            </p>
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

        <br>
        <div class="container p-5">
            <input type="submit" class="btn btn-danger" name="submit-bookings" value="Submit">
        </div>

    </form>


    <br>


    <!-- <ol>
        <li>rooms to select</li>
        <li>button to packages</li>
        <li>days to stay</li>
        <li>email</li>
    </ol> -->

    <!-- Popper and jQuery files -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>