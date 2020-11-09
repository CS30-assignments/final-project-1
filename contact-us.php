<?php

// Suggestion
// initialize variable
$thankYou = "";
if (isset($_POST['suggest'])) {
    $thankYou = "Thank You, we hope you enjoyed your stay!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
</head>

<body>
    <!-- Header -->
    <?php include('header.php') ?>

    <div class="container pt-5">

        <!-- Info about Contact Us -->
        <h2>Contact Us:</h2>

        <!-- Description -->
        <p class="container text-dark">Have a question? A concern? Are you lost?</p>
        <p class="container text-dark">
            Don't hesitate to reach out to us through our email, phone or social medias to
            assist you in having the best stay at Mungara Suites!
        </p>

    </div>



    <!-- Contact Information -->
    <div class="container">
        <h4 class="container pt-5">Contact Information: </h4>
        <div class="container row">
            <!-- Phone Number -->
            <div class="col">
                <p class="bg-light p-4">Phone Number: 780-303-3692</p>
            </div>

            <!-- Address -->
            <div class="col">
                <p class="bg-light p-4">Address: 1234 Patterson Street</p>
            </div>

            <!-- Address -->
            <div class="col">
                <p class="bg-light p-4">Email: mugara@suites.com</p>
            </div>

        </div>
    </div>


    <!-- Social Media "links" -->
    <div class="container pt-3">
        <h4>Social Medias:</h4>
        <img src="images/social-medias/insta.png" alt="instagram" width="50px" height=" 50px">
        <img src="images/social-medias/facebook.jpg" alt="facebook" width="50px" height=" 50px">
        <img src="images/social-medias/twitter.png" alt="twitter" width="50px" height=" 50px">
        <img src="images/social-medias/snapchat.png" alt="snapchat" width="50px" height=" 50px">
    </div>

    <!-- Leave a Suggestion -->
    <form method="POST">
        <div class="container pt-5">
            <h4 class="py-3">Leave a Suggestion:</h4>
            <input type="text" name="suggestion" placeholder="Type Here!">
            <input type="submit" name="suggest" value="Suggest">
        </div>
    </form>

    <!-- Thank You for staying with us -->
    <div class="container">
        <p class="text-success"><?php echo $thankYou; ?></p>
    </div>

</body>

</html>