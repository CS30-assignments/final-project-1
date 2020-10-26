<?php 

// function for selecting from database
function selectSql($db, $fetchResults, $value, $postEmail, $postPassword){
    // write query for all user information
    $sql = "SELECT id, names, email, passwords FROM user_information";

    // make the query and get results
    $result = mysqli_query($db, $sql);

    // fetch results as an array
    $fetchResults = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($db);

    // loop through user_information to check log in and password
    foreach ($fetchResults as $value) {
        if ($postEmail == $value['email'] && $postPassword == $value['passwords']) {
            // go to about page
            // start the session
            session_start();
            $_SESSION['name'] = $value['names'];
            $_SESSION['email'] = $value['email'];
            header('Location: about-us.php');
        }
    }

}





















function bookGuest($in, $out, $e_confirm, $room,$db){
    // initialize all variables
    $room_type = $check_in = $check_out = $email_confirm = '';
    
    // errors
    $errors = array('check-in' => '', 'check-out' => '', 'room-type' => '', 'email-confirm' => '');
    
    // Take submitted informtation and put in selections
    
        // Check if check-in is empty
        if (empty($in)) {
            $errors['check-in'] = 'An check in date is required <br />';
        } else {
            $check_in = $in;
        }
    
        // Check if check-out is empty
        if (empty($out)) {
            $errors['check-out'] = 'An check out date is required <br />';
        } else {
            $check_out = $out;
        }
    
        // Check if email confirmation is empty
        if (empty($e_confirm)) {
            $errors['email-confirm'] = 'An email is required <br />';
        } else {
            $email_confirm = $e_confirm;
        }
    
    
        // Check for errors
    
        if (array_filter($errors)) {
            echo "WE have a problem";
            // $fillIn = "All fields must be filled in!";
        } else {
    
            // escapeString($check_in, $connect, 'check-in');
            // escapeString($check_out, $connect, 'check-out');
            // escapeString($room_type, $connect, 'room-type');
            // escapeString($email_confirm, $connect, 'email-confirm');
    
            $check_in = mysqli_real_escape_string($db, $in);
            $check_out = mysqli_real_escape_string($db, $out);
            $room_type = mysqli_real_escape_string($db, $room);
            $email_confirm = mysqli_real_escape_string($db, $e_confirm);
    
            // create sql
            $sql = "INSERT INTO bookings_information(email_confirm, check_in, check_out, room_type) VALUES ('$email_confirm', '$check_in','$check_out','$room_type')";
    
            // save to database and then check
            if (mysqli_query($db, $sql)) {
                header('Location: bookings.php');
                echo "WOOOOOWWWW IT WORKS";
            } else {
                echo 'query errrrooorr';
            }
        }
    }
    
    














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




// ?>