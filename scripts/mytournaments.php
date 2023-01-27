<?php
require "database.php";

if (isset($_POST['id']))
{
        $id = prepareData($_POST['id']);


        $sql = "SELECT * FROM `tournaments` WHERE creator_id=$id";
        $result = mysqli_query($connection, $sql);
        $result = $result->fetch_all();
        echo '[';
        for ($i = 0; $i < count($result); $i++)
        {
            $user_id = $result[$i][0];
            $creator_id = $result[$i][1];
            $avatar = $result[$i][2];
            $name = $result[$i][3];
            $info = $result[$i][4];
            $region = $result[$i][5];
            $start_date = $result[$i][6];
            $prizes = $result[$i][7];
            $teams_id = $result[$i][8];
            $request_teams_id = $result[$i][9];
            $game = $result[$i][10];
            $game_mode = $result[$i][11];
            $format = $result[$i][12];
            $teams_count = $result[$i][13];
            $rules = $result[$i][14];


            echo '{';
            echo "\"id\"=$user_id, ";
            echo "\"creator_id\"=$creator_id, ";
            echo "\"avatar\"=\"$avatar\", ";
            echo "\"name\"=\"$name\", ";
            echo "\"info\"=\"$info\", ";
            echo "\"region\"=\"$region\", ";
            echo "\"start_date\"=\"$start_date\", ";
            echo "\"prizes\"=\"$prizes\", ";
            echo "\"teams_id\"=\"$teams_id\", ";
            echo "\"request_teams_id\"=\"$request_teams_id\", ";
            echo "\"game\"=\"$game\", ";
            echo "\"game_mode\"=\"$game_mode\", ";
            echo "\"format\"=\"$format\", ";
            echo "\"teams_count\"=$teams_count, ";
            echo "\"rules\"=\"$rules\"";

            echo '}';
            if (($i+1) != count($result)) {
                echo ', ';
            }
        }
        echo ']';

        
    } else echo 'Error';
?>