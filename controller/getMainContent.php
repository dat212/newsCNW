<?php
require_once '../model/AccessDB.php';

$database = new AccessDB();
$arr_list_post = $database->getListPost();
echo json_encode($arr_list_post);


?>