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

// Login Validation
if (isset($_POST["log-in"])) {
    // loop through user_information to check log in and password
    foreach ($user_information as $user) {
        if ($_POST['email'] == $user['email'] && $_POST['password'] == $user['passwords']) {
            // go to about page
            header('Location: about-us.php');
        }
    }

    // If incorrect:
    if ($_POST['email'] != $user['email'] && $_POST['password'] != $user['passwords']) {
        // go to about page
        echo "Sorry, incorrect login. Try again.";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Page</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <!-- Include Header -->
    <!-- Main Heading  -->
    <h1 class="display-3">Name</h1>

    <!-- Navigation with phone, address, and sign up -->
    <nav class="bg-light">
        <ul class="nav justify-content-end">
            <li class="nav-item px-4">Phone Number: 780-938-9302</li>
            <li class="nav-item px-4">Address: 4139 CarRET Street</li>
        </ul>

    </nav>


    <!-- Log In (if have account) -->
    <div class="p-5">
        <div class="container bg-light py-4 w-25 float-left">
            <!-- Log in Heading -->
            <h3 class="display 4">Log In</h3>

            <form method="post" class="pt-2">
                <label>Email:</label>
                <!-- Enter in value  -->
                <input type="text" name="email">

                <br>

                <label>Password:</label>
                <!-- Enter in value  -->
                <input type="text" name="password">

                <!-- Submit Login -->
                <input class="btn bg-secondary" type="submit" name="log-in" value="Log In">
            </form>

            <!-- Sign up -->
            <p class=" pt-5 text-info">
                Don't have a login?
                <br>
                <a class="nav-link" href="sign-up.php">Sign Up</a>
            </p>

        </div>

    </div>

</body>

</html>