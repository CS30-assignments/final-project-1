<?php

// Login Validation
if (isset($_POST["log-in"])) {
    if ($_POST['email'] == "example@email.com" && $_POST['password'] == "password") {
        echo "HEEEELLLLLOOOO";
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
    <!-- Navgation Bar -->
    <nav class="navbar bg-light">
        <div class="nav-item">
            <h1 class="display-3">Name</h1>
        </div>

        <div class="nav-item">
            <a href="#" class="btn bg-secondary float-right">Sign Up</a>
        </div>

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


        </div>

    </div>

</body>

</html>