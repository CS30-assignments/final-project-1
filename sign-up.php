<?php

// call file with database connection
include('connect-db.php');
// call file with functions
include('functions.php');

// initialize variables
$user_name = $user_email = $user_password = $errors = "";

// Enter sign up info into database
if (isset($_POST['submit-sign-up'])) {

    // Check name
    if (empty($_POST['name'])) {
        $errors = "All fields must be entered in.";
    } else {
        $user_name = $_POST['name'];
    }

    // Check email
    if (empty($_POST['email'])) {
        $errors = "All fields must be entered in.";
    } else {
        $user_email = $_POST['email'];
    }

    // Check password
    if (empty($_POST['password'])) {
        $errors = "All fields must be entered in.";
    } else {
        $user_password = $_POST['password'];
    }

    if ($errors) {
        echo "DO NOT SEND TO THE DATABASE";
    } else {
        // Insert sign up info into database
        // escape the string
        $user_name = mysqli_real_escape_string($connect, $_POST['name']);
        $user_email = mysqli_real_escape_string($connect, $_POST['email']);
        $user_password = mysqli_real_escape_string($connect, $_POST['password']);

        // create sql and insert
        $sql = "INSERT INTO user_information(names, email, passwords) VALUES ('$user_name', '$user_email', '$user_password')";

        // save to database and them re-direct
        if (mysqli_query($connect, $sql)) {
            selectSql($connect, $user_information, $user, $user_email, $user_password);
        } else {
            echo "query error: " . mysqli_error($connect);
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-Up</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- Include Header -->
    <!-- Main Heading  -->
    <h1 class="display-3">Mungara Suites</h1>

    <!-- Navigation with phone, address, and sign up -->
    <nav class="p-3">
        <ul class="nav justify-content-end">
            <li class="text-light nav-item px-4">Phone Number: 780-938-9302</li>
            <li class="text-light nav-item px-4">Address: 1239 Patterson Street</li>
        </ul>

    </nav>

    <!-- Sign Up Form-->
    <div class="container pt-5 w-25">
        <form class="pt-5 pl-3 bg-light" method="POST">
            <h2>Sign Up</h2>

            <!-- Name -->
            <p class="pb-3">
                <label>Name: </label>
                <input type="text" name="name" placeholder="Name">
            </p>

            <!-- Email -->
            <p class="pb-3">
                <label>Email: </label>
                <input type="text" name="email" placeholder="email@example.com">
            </p>

            <!-- Password -->
            <p>
                <label>Password: </label>
                <input type="password" name="password" placeholder="--------">
            </p>

            <!-- Submit Sign Up -->
            <p class="p-2">
                <input type="submit" name="submit-sign-up">
            </p>

            <p class="text-danger pb-1"><?php echo $errors; ?></p>
        </form>
    </div>


</body>

</html>