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

?>

<head>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Main Heading  -->
    <h1 class="display-4">Mungara Suites</h1>

    <!-- Navigation Bar (to display different sections) -->
    <nav class="navbar navbar-expand-sm">

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



            <div id="name-logout" class="">
                <ul class="navbar-nav">
                    <li class="text-white nav-item px-5">780-0544-0402</li>
                    <li id="hello-name" class="text-white nav-item">Hello <?php echo htmlspecialchars($name) ?></li>

                    <form action="index.php" method="POST" class="px-3">
                        <input class="btn btn-warning nav-item" type="submit" name="log-out" value="Log Out">
                    </form>
                </ul>

            </div>



        </ul>


    </nav>