<?php

// say hello ------ when user logs in to page
session_start();

// log out of user sessions
if (isset($_POST["log-out"])) {
    session_unset();
} else {
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
}

echo $_SESSION['name'];

?>

<head>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Main Heading  -->
    <h1 class="display-3">Name</h1>

    <!-- Navigation Bar (to display different sections) -->
    <nav class="navbar navbar-expand-sm bg-light">

        <!-- Items in the bar -->
        <ul class="navbar-nav">
            <li class="nav-item  px-5">
                <a class="nav-link" href="about-us.php">About Us</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="bookings.php">Bookings</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="premium-packages.php">Premium Packages</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="contact-us.php">Contact Us</a>
            </li>

            <li class="nav-item  px-5">
                <a class="nav-link" href="explore.php">Explore</a>
            </li>

            <li class="text-success p-2">Hello <?php echo htmlspecialchars($name) ?></li>

            <form action="index.php" method="POST" class="px-3">
                <input class="btn btn-warning" type="submit" name="log-out" value="Log Out">
            </form>

        </ul>


    </nav>