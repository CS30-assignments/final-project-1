<?php

//check in variable

// Take submitted informtation and put in selections
if (isset($_POST['submit-bookings'])) { }


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
            <h3>Confirm: </h3>
        </div>
    </div>

    <!-- Check In -->
    <div class="container p-5">
        <label>Check In: </label>
        <input type="date" name="check-in">

        <label>Check Out: </label>
        <input type="date" name="check-out">
    </div>




    <!-- Room Select -->
    <form method="POST" class="container p-5">
        <label>Choose a Room</label>
        <select name="rooms">
            <option value="room-1">Room-1</option>
            <option value="room-2">Room-2</option>
            <option value="room-3">Room-3</option>
            <option value="room-4">Room-4</option>
        </select>
    </form>


    <br>



    <!-- Submit -->
    <form method="POST" class="container">
        <input type="submit" name="submit-bookings" value="Submit">
    </form>


    <!-- <ol>
        <li>rooms to select</li>
        <li>button to packages</li>
        <li>days to stay</li>
        <li>email</li>
    </ol> -->

    <!-- Popper and jQuery files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>