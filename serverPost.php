<?php


$db = mysqli_connect('localhost', 'root', '', 'webrtc');
$posted = file_get_contents('php://input');

$jsonData = json_decode($posted, true);

$temp = $jsonData['name'];
$event = $jsonData['event'];
$data = $jsonData['data'];

if (!$db->query("INSERT INTO `room` (`id`, `user`, `type`, `data`) VALUES (NULL, '$temp', '$event', '$data');")) {
    echo ("Error description: " . $db->error);
}

$db->close();



?>
