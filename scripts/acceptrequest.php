<?php
require "database.php";

if (isset($_POST['team_id']) && isset($_POST['tournament_id'])) {
    $team_id = prepareData($_POST['team_id']);
    $tournament_id = prepareData($_POST['tournament_id']);

    $sql = "SELECT `teams_id`, `request_teams_id` FROM `tournaments` WHERE id=$tournament_id";
    $result = mysqli_query($connection, $sql);
    $result = $result->fetch_all();

    $current_teams = $result[0][0];
    $request_teams = $result[0][1];

    if (strripos($current_teams, $team_id) == false) 
    {
        if ($current_teams == "[]") {
            $current_teams = "[$team_id]";
        } else {
            $current_teams = substr_replace($current_teams, ', ' . $team_id . ']', -1);
        }
    }
        $request_teams = str_replace(", $team_id, ", ", ", $request_teams);
        $request_teams = str_replace(", $team_id", "", $request_teams);
        $request_teams = str_replace("$team_id, ", "", $request_teams);
        $request_teams = str_replace("$team_id", "", $request_teams);

        $sql = "UPDATE `tournaments` SET `teams_id` = '$current_teams' WHERE `tournaments`.`id` = $tournament_id";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
            die('Error');
        }

        $sql = "UPDATE `tournaments` SET `request_teams_id` = '$request_teams' WHERE `tournaments`.`id` = $tournament_id";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
            die('Error');
        } else echo 'Success';
}
else {
    echo "Error";
}
?>