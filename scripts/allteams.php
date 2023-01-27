<?php
require "database.php";

$sql = "SELECT * FROM `teams`";
$result = mysqli_query($connection, $sql);
$result = $result->fetch_all();
echo '[';
for ($i = 0; $i < count($result); $i++) {
        
        $user_id = $result[$i][0];
        $creator_id = $result[$i][1];
        $name = $result[$i][2];
        $info = $result[$i][3];
        $region = $result[$i][4];
        $avatar = $result[$i][5];
        $game = $result[$i][6];
        $players_count = $result[$i][7];
        $players_id = $result[$i][8];
        $request_players_id = $result[$i][9];

            echo '{';
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
            echo '}';


        if (($i + 1) != count($result)) {
                echo ', ';
        }
}

echo ']';
?>