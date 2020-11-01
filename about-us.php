<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Zilla+Slab:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <!-- Include Header -->
    <?php include('header.php') ?>


    <!-- Carousel of Images -->
    <div id="carouselExampleIndicators" class="carousel w-50 float-right col border py-2" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner pt-2">
            <div class="carousel-item active">
                <img class="responsive" src="images/hotel.jpg" alt="First slide" width="750px" height="570px">
            </div>
            <div class="carousel-item">
                <img class="responsive" src="images/room-3.jpg" alt="Second slide" width="730px" height="570px">
            </div>
            <div class="carousel-item">
                <img class="responsive" src="images/food-2.jpg" alt="Third slide" width="750px" height="570px">
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>



    <div>
        <!-- Main Heading -->
        <h1 class="p-2">Welcome to Mungara Suites!</h1>

        <!-- Promo paragraph -->
        <p id="about-paragraph" class="p-2">
            With over 10,000 hotels over the world, Mungara Suites has been a reliable, comfortable, and incredible experience for millions of people. Whether you are taking a vacation, stopping for a roadtrip, or travelling for buisness, the NAME is commited to create a wonderful and lasting experience for you.
        </p>

        <div class="container pb-5">
            <hr>
        </div>
        <br>
        <!-- <div> -->
            <!-- Customer Reviews -->
            <p id="customer-review">
                "Wow! I'm blown away by the care and kindess that Mungara Suites treats us with. Our favourtie hotel to stay at!"
                - Claire
            </p>

            
            <p id="customer-review-2">
                "Incredible! I always find an excuse to stay at Mungara Suites!" <br>
                - Johnathan
            </p>
        <!-- </div> -->


        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>