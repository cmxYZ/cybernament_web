<?php $url = 'http://www.srv184174.hoster-test.ru/cybernament/scripts/myteam.php';

$params = array(
    'id' => 123
);
$result = file_get_contents($url, false, stream_context_create(array(
    'http' => array(
        'method'  => 'POST',
        'header'  => 'Content-type: application/x-www-form-urlencoded',
        'content' => http_build_query($params)
    )
)));

echo $result;

?>

<!-- http://www.srv184174.hoster-test.ru/cybernament/scripts/login.php -->