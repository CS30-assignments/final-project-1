<?php ?>

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
    <!-- Room Select -->
    <div class="dropdown container p-5">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Rooms</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Room 1</a>
            <a class="dropdown-item" href="#">Room 2</a>
            <a class="dropdown-item" href="#">Room 3</a>
        </div>
    </div>
    </div>

    <br>

    <!-- Number of Days to stay -->
    <div class="dropdown container p-5">
        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">Number of Nights</button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">1 night</a>
            <a class="dropdown-item" href="#">2 nights</a>
            <a class="dropdown-item" href="#">3 nights</a>
        </div>
    </div>
    </div>

    <!-- Selection -->
    <div class="container">
        <div class="container border float-right w-25">
            <h3>Selections: </h3>
        </div>
    </div>


    <!-- <ol>
        <li>rooms to select</li>
        <li>button to packages</li>
        <li>days to stay</li>
        <li>email</li>
    </ol> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>