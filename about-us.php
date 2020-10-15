<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
</head>

<body>
    <!-- Include Header -->
    <?php include('header.php') ?>

    <!-- Carousel Images -->
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
        </ol>

        <!-- Images in the carousel -->
        <div class="carousel-inner" role="listbox">
            <!-- first picture -->
            <div class="item-active">
                <img src="images/lounge-1.jpg" alt="bedroom1" width="150px" height="100px">
            </div>

            <div class="item">
                <img src="images/bedroom-1.jpg" alt="bedroom1" width="150px" height="100px">
            </div>

            <div class="item">
                <img src="images/food-1.jpg" alt="bedroom1" width="150px" height="100px">
            </div>

            <div class="item">
                <img src="images/bedroom-2.jpg" alt="bedroom1" width="150px" height="100px">
            </div>
        </div>

        <!-- moving left and right -->

    </div>


    <!-- Detals -->
    <h1>About us information</h1>
    <ol>
        <li>images</li>
        <li>motto/vision/words/mission ??</li>
        <li>carousel</li>
        <li>reviews</li>
    </ol>

</body>

</html>