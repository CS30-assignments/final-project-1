<?php

// call file with database connection
include('connect-db.php');

// login error
$loginError = ' ';

if(isset($_POST['admin'])){

    // Log in with specific admin info
    if($_POST['admin-email'] == 'navika@admin.com' && $_POST['admin-pin'] == '27878'){
        header('Location: view-users.php');
    } else{
        $loginError = "Incorrect Login, please try again.";
    }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>
    <!-- Bootstrap CSS Link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <!-- Include Header -->
    <div class="p-5 col d-flex justify-content-center">
        <div class="container bg-light py-4 w-25 float-left">

            <!-- Log in Heading -->
            <h3 class="display 4">Administration</h3>

            <form method="post" class="pt-2">
                <label class="p-2">Admin Email:</label>
                <!-- Enter in value  -->
                <input type="text" name="admin-email">
                <br>

                <label class="p-2">Pin # :</label>
                <!-- Enter in value  -->
                <input type="password" name="admin-pin">

                <!-- Submit Login -->
                <input class="btn bg-info" type="submit" name="admin" value="Log In">

                <!-- Error in the Login -->
                <p class="pt-2 text-danger"><?php echo $loginError; ?></p>
            </form>

        </div>
    </div>

    </div>

</body>

</html>