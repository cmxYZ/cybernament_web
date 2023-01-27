<?php
require "database.php";

if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = prepareData($_POST['username']);
        $password = prepareData($_POST['password']);

        $sql = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($connection, $sql);
        $result = $result->fetch_all();
        $user_id = $result[0][0];
        $username = $result[0][1];
        $email = $result[0][2];
        $region = $result[0][4];
        $avatar = $result[0][5];
        $info = $result[0][6];




        if ($result[0][3] == $password)
        {
            echo '[{';
            echo "\"id\"=$user_id, ";
            echo "\"username\"=\"$username\", ";
            echo "\"email\"=\"$email\", ";
            echo "\"region\"=\"$region\", ";
            echo "\"avatar\"=\"$avatar\", ";
            echo "\"info\"=\"$info\"";
            echo '}]';
        }
        else echo 'Wrong Password or Username';
    } else echo 'Error';
?>