<?php
require "database.php";

if (isset($_POST['creator_id']) &&
isset($_POST['name']) &&
isset($_POST['info']) &&
isset($_POST['region']) &&
isset($_POST['game']) &&
isset($_POST['players_count'])) 
{
        $creator_id = prepareData($_POST['creator_id']);
        $name = prepareData($_POST['name']);
        $info = prepareData($_POST['info']);
        $region = prepareData($_POST['region']);
        $game = prepareData($_POST['game']);
        $players_count = prepareData($_POST['players_count']);

        $sql = "INSERT INTO `teams` (`creator_id`, `name`, `info`, `region`, `game`, `players_count`, `players_id`) 
        VALUES ('$creator_id', '$name', '$info', '$region', '$game', '$players_count', '[$creator_id]')";
        $result = mysqli_query($connection, $sql);
        if ($result) {
            echo "Success";
        } else {
            echo "Error";
        }
    }
?>