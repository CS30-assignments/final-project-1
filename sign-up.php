<?php 

// call file with database connection
include('connect-db.php');

// initialize variables
$user_name = $user_email = $user_password = "";

// Enter sign up info into database
if(isset($_POST['submit-sign-up'])){
    echo "HIIIIIIIIIII";
    echo $_POST['names'] . $_POST['email'];
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

</head>

<body>
    <!-- Include Header -->
    <!-- Main Heading  -->
    <h1 class="display-3">Name</h1>

    <!-- Navigation with phone, address, and sign up -->
    <nav class="bg-light">
        <ul class="nav justify-content-end">
            <li class="nav-item px-4">Phone Number: 780-938-9302</li>
            <li class="nav-item px-4">Address: 1239 CarRET Street</li>
        </ul>

    </nav>

    <!-- Sign Up Form-->
    <div class="container pt-5 w-25">
        <form class="pt-5 pl-3 bg-light" method="POST">
            <h2>Sign Up</h2>

            <!-- Name -->
            <p class="pb-3">
                <label>Name: </label>
                <input type="text" name="names">
            </p>

            <!-- Email -->
            <p class="pb-3">
                <label>Email: </label>
                <input type="text" name="email">
            </p>

            <!-- Password -->
            <p class="pb-3">
                <label>Password: </label>
                <input type="text" name="password">
            </p>

            <!-- Submit Sign Up -->
            <input type="submit" name="submit-sign-up">

        </form>
    </div>


</body>

</html>