<?php

// call file with database connection
include('connect-db.php');




// // initialize all variables
// $room_type = $check_in = $check_out = $email_confirm = $fillIn = '';

// // errors
// $errors = array('check-in' => '', 'check-out' => '', 'room-type' => '', 'email-confirm' => '');

// // Take submitted informtation and put in selections
// if (isset($_POST['submit-bookings'])) {
//     // Check if check-in is empty
//     if (empty($_POST['check-in'])) {
//         $errors['check-in'] = 'An check in date is required <br />';
//     } else {
//         $check_in = $_POST['check-in'];
//     }

//     // Check if check-out is empty
//     if (empty($_POST['check-out'])) {
//         $errors['check-out'] = 'An check out date is required <br />';
//     } else {
//         $check_out = $_POST['check-out'];
//     }

//     // Check if email confirmation is empty
//     if (empty($_POST['email-confirm'])) {
//         $errors['email-confirm'] = 'An email is required <br />';
//     } else {
//         $email_confirm = $_POST['email-confirm'];
//     }


//     // Check for errors

//     if (array_filter($errors)) {
//         echo "WE have a problem";
//         $fillIn = "All fields must be filled in!";
//     } else {

//         // escapeString($check_in, $connect, 'check-in');
//         // escapeString($check_out, $connect, 'check-out');
//         // escapeString($room_type, $connect, 'room-type');
//         // escapeString($email_confirm, $connect, 'email-confirm');

//         $check_in = mysqli_real_escape_string($connect, $_POST['check-in']);
//         $check_out = mysqli_real_escape_string($connect, $_POST['check-out']);
//         $room_type = mysqli_real_escape_string($connect, $_POST['room-type']);
//         $email_confirm = mysqli_real_escape_string($connect, $_POST['email-confirm']);

//         // create sql
//         $sql = "INSERT INTO bookings_information(email_confirm, check_in, check_out, room_type) VALUES ('$email_confirm', '$check_in','$check_out','$room_type')";

//         // save to database and then check
//         if (mysqli_query($connect, $sql)) {
//             header('Location: bookings.php');
//         } else {
//             echo 'query errrrooorr';
//         }
//     }
// }



// Delete booking from user
if (isset($_POST['delete-booking'])) {
    echo "DELETING TIMMMEE!!!!!!";
    // Delete row of info
    $delete_id = mysqli_real_escape_string($connect, $_POST['delete_id']);

    $sql = "DELETE FROM bookings_information WHERE id = $delete_id";

    // make and check if query is succesful
    if (mysqli_query($connect, $sql)) {
        // success
        echo "WE HAVE DELETED";
    } else {
        // failure
        echo 'query error: ' . mysqli_error($connect);
    }
}


// query emails from both tables
$sql_booking = "SELECT id, email_confirm, check_in, check_out, room_type FROM bookings_information";


// make the query and get results
$result = mysqli_query($connect, $sql_booking);

// fetch results as an array
$userBook = mysqli_fetch_all($result, MYSQLI_ASSOC);

// free result
mysqli_free_result($result);

// close connection
mysqli_close($connect);


// FUNCTION FOR writing messages!!!!!!!!!!!!!!!!! TRY IT OUT



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>

    <!-- Things to include -->

    <div>
        <h1 class="p-2">Book a Room!</h1>
        <p id="booking-info">Book a room with us in one of our standard, comfortable guest rooms or check out our premium packages to elevate your stay!</p>
    </div>
    <p class=" container text-danger"> <?php echo $fillIn; ?></p>




    <!-- What to do-->

    <!-- Selection -->
    <div class="container">
        <div class="container float-right w-25">
            <h3>Booked:</h3>
            <div>
                <?php foreach ($userBook as $book) { ?>
                    <?php if ($email == $book['email_confirm']) { ?>
                        <div id="booked" class="container">
                            <?php
                            echo $book['check_in'] . '</br >';
                            echo $book['check_out'] . '</br >';
                            echo $book['room_type'] . '</br >';
                            ?>
                            <form class="btn" action="#" method="POST">
                                <input type="hidden" name="delete_id" value="<?php echo $book['id']; ?>">
                                <input id="delete-booking" class="btn" type="submit" name="delete-booking" value="Delete">
                            </form>
                        </div>

                    <?php } ?>

                <?php } ?>


            </div>
        </div>
    </div>

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
                <input type="submit" class="btn btn-success" name="submit-bookings" value="Submit">
            </div>

        </form>
    </div>



    <br>

    <!-- Popper and jQuery files -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script> -->

</body>

</html>