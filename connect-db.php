<?php 

// Connect to database
$connect = mysqli_connect('localhost', 'navika', 'php8090', 'hotel-page');

// Real escape string function 
// function escapeString($input_var, $dbconnect, $name){
//     $input_var = mysqli_real_escape_string($dbconnect, $_POST[$name]);
//     return $input_var;
// }
