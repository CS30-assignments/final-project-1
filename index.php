<?php

// call file with database connection
include('connect-db.php');
// initialize login variable
$loginError = $errors = " ";

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
    echo "COMING FROM LOG In";

    // loop through user_information to check log in and password
    foreach ($user_information as $user) {
        if ($_POST['email'] == $user['email'] && $_POST['password'] == $user['passwords']) {
            // go to about page
            // start the session
            session_start();
            $_SESSION['name'] = $user['names'];
            $_SESSION['email'] = $user['email'];



            header('Location: about-us.php');
        } elseif ($_POST['email'] != $user['email'] || $_POST['password'] != $user['passwords']) {
            // go to about page
            $loginError =  "Sorry, incorrect login. Try again. Email and password are case sensitive.";
        }
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
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Include Header -->
    <!-- Main Heading  -->
    <h1 class="display-3">Name</h1>

    <!-- Navigation with phone, address, and sign up -->
    <nav class="p-3">
        <ul class="nav justify-content-end">
            <li class="text-light nav-item px-4">Phone Number: 780-938-9302</li>
            <li class="text-light nav-item px-4">Address: 1239 Unknown Street</li>
        </ul>

    </nav>


    <!-- Log In (if have account) -->

    <div class="p-5 col d-flex justify-content-center">
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
                <input type="password" name="password">

                <!-- Submit Login -->
                <input class="btn bg-secondary" type="submit" name="log-in" value="Log In">

                <!-- Error in the Login -->
                <p class="pt-2 text-danger"><?php echo $loginError; ?></p>
            </form>


            <!-- Sign up -->
            <p class="pt-3 text-info">
                Don't have a login?
                <br>
                <a class="nav-link" href="sign-up.php">Sign Up</a>
            </p>

        </div>
    </div>

    </div>



</body>

</html>