<?php ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overview Page</title>

    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <!-- Main Heading  -->
    <h1 class="display-3">Name</h1>

    <!-- Navigation Bar (to display different sections) -->
    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Items in the bar -->
        <ul class="navbar-nav">
            <li class="nav-item  px-5">
                <a class="nav-link" href="#">About Us</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="#">Bookings</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="#">Premuim Packages</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="#">Contact</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="#">Find Us</a>
            </li>

            <!-- Logout Button -->
            <form class="ml-5" action="#">
                <input class="btn btn-sm bg-secondary" type="submit" name="log-out" value="Log Out">
            </form>



        </ul>
    </nav>
</body>

</html>