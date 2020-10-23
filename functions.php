<?php 

// function for selecting from database
function selectSql($db, $fetchResults, $value, $postEmail, $postPassword){
    // write query for all user information
    $sql = "SELECT id, names, email, passwords FROM user_information";

    // make the query and get results
    $result = mysqli_query($db, $sql);

    // fetch results as an array
    $fetchResults = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // free result
    mysqli_free_result($result);

    // close connection
    mysqli_close($db);

    // loop through user_information to check log in and password
    foreach ($fetchResults as $value) {
        if ($postEmail == $value['email'] && $postPassword == $value['passwords']) {
            // go to about page
            // start the session
            session_start();
            $_SESSION['name'] = $value['names'];
            $_SESSION['email'] = $value['email'];
            header('Location: about-us.php');
        }
    }

}




?>