<?php
require "database.php";

if (isset($_POST['id']) )
{
        $id = prepareData($_POST['id']);

        $sql = "SELECT * FROM `teams` WHERE players_id LIKE '[$id]' OR players_id LIKE '[$id, %' OR players_id LIKE '%, $id, %' OR players_id LIKE '%, $id]'";
        $result = mysqli_query($connection, $sql);
        $result = $result->fetch_all();

        if ($result)
        {
        $user_id = $result[0][0];
        $creator_id = $result[0][1];
        $name = $result[0][2];
        $info = $result[0][3];
        $region = $result[0][4];
        $avatar = $result[0][5];
        $game = $result[0][6];
        $players_count = $result[0][7];
        $players_id = $result[0][8];
        $request_players_id = $result[0][9];

            echo '[{';
            echo "\"id\"=$user_id, ";
            echo "\"creator_id\"=$creator_id, ";
            echo "\"name\"=\"$name\", ";
            echo "\"info\"=\"$info\", ";
            echo "\"region\"=\"$region\", ";
            echo "\"avatar\"=\"$avatar\", ";
            echo "\"game\"=\"$game\", ";
            echo "\"players_count\"=$players_count, ";
            echo "\"players_id\"=\"$players_id\", ";
            echo "\"request_players_id\"=\"$request_players_id\"";
            echo '}]';
        } else echo 'No Team';
        
    } else echo 'Error';
?>