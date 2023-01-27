<?php
define('DB_HOST', 'mysql-184174.srv.hoster.ru');
define('DB_USER', 'srv184174_root');
define('DB_PASS', 'DV0FbcKOpf');
define('DB_NAME', 'srv184174_cybernament');

$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
mysqli_set_charset($connection, 'utf8');
if ($connection->connect_error) {
    die('Error: Database connection failed: ' . $connection->connect_error);
}

function prepareData($data)
{
    global $connection;
    return mysqli_real_escape_string($connection, stripslashes(htmlspecialchars($data)));
}

?>