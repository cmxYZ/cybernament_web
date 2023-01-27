<?php
require "database.php";

if (isset($_POST['creator_id']) &&
isset($_POST['name']) &&
isset($_POST['info']) &&
isset($_POST['region']) &&
isset($_POST['start_date']) &&
isset($_POST['prizes']) &&
isset($_POST['game']) &&
isset($_POST['game_mode']) &&
isset($_POST['format']) &&
isset($_POST['teams_count']) &&
isset($_POST['rules'])) 
{
        $creator_id = prepareData($_POST['creator_id']);
        $name = prepareData($_POST['name']);
        $info = prepareData($_POST['info']);
        $region = prepareData($_POST['region']);
        $start_date = prepareData($_POST['start_date']);
        $prizes = prepareData($_POST['prizes']);
        $game = prepareData($_POST['game']);
        $game_mode = prepareData($_POST['game_mode']);
        $format = prepareData($_POST['format']);
        $teams_count = prepareData($_POST['teams_count']);
        $rules = prepareData($_POST['rules']);

        $sql = "INSERT INTO `tournaments` (`creator_id`, `name`, `info`, `region`, `start_date`, `prizes`, `teams_id`, `request_teams_id`, `game`, `game_mode`, `format`, `teams_count`, `rules`) 
        VALUES ('$creator_id', '$name', '$info', '$region', '$start_date', '$prizes', '[]', '[]', '$game', '$game_mode', '$format', '$teams_count', '$rules')";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            echo "Success";
        } else {
            echo "Error";
        }

        
    }
?>