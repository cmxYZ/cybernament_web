<?php
require "database.php";

if (isset($_POST['tournament_id']) && isset($_POST['team_id'])) {
    $tournament_id = prepareData($_POST['tournament_id']);
    $team_id = prepareData($_POST['team_id']);
    
    $sql = "SELECT `request_teams_id` FROM `tournaments` WHERE id=$tournament_id";
    $result = mysqli_query($connection, $sql);
    $result = $result->fetch_all();

    $request_teams = $result[0][0];

    if (strripos($request_teams, $team_id) == false) {
        if ($request_teams == "[]") {
            $request_teams = "[$team_id]";
        } else {
            $request_teams = substr_replace($request_teams, ', ' . $team_id . ']', -1);
        }
        

        $sql = "UPDATE `tournaments` SET `request_teams_id` = '$request_teams' WHERE `tournaments`.`id` = $tournament_id";
        $result = mysqli_query($connection, $sql);
        if (!$result) {
            die('Error');
        }
        else echo 'Success';
    }
    else echo 'Success';
} 
else echo 'Error';
?>