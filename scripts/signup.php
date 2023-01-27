<?php
require "database.php";

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['region'])) {
    $username = prepareData($_POST['username']);
    $email = prepareData($_POST['email']);
    $password = prepareData($_POST['password']);
    $region = prepareData($_POST['region']);

    $sql ="INSERT INTO `users` (`username`, `email`, `password`, `region`) VALUES ('$username', '$email', '$password', '$region')";
    $result = mysqli_query($connection, $sql);

    if ($result) {
        echo "Success";
    } else {
        echo "Error";
    }
} else echo "Error";
?>