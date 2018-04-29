<?php
require_once '../model/AccessDB.php';
$database = new AccessDB();
$slug = $_POST['slug'];
// echo $slug . "123fuck";
$post = $database->getContentPost($slug);
echo json_encode($post);
// $database->

?>