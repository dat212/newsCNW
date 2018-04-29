<?php
require_once '../model/AccessDB.php';
$database = new AccessDB();

// Variable for num latest display
$limit = 4;
$latest_post = $database->getLatestPost($limit);


echo json_encode($latest_post);

?>