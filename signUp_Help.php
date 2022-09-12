<?php
$connection = mysqli_connect('localhost', 'root');

if ($connection){
    echo "connected";
}
else{
    echo "ERROR";
}

mysqli_select_db($connection, 'authentication');

$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$email = $_POST['email'];
$pass = $_POST['password'];

$data = "INSERT INTO credentials (FNAME, LNAME, EMAIL, PASSWD) VALUES ('$firstname', '$lastname', '$email', '$pass')";

mysqli_query ($connection, $data);
header('location:logIn.php');


?>