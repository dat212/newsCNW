<?php

require_once '../model/AccessDB.php';
$database = new AccessDB();

$root = $database->getCategory();
// echo "root:";
// var_dump($root);
$arr_child = array();
foreach ($root as $key => $value) {
	$parent_id = intval($value['id_cate']);
	// echo $parent_id;
	$list_child = $database->getCategory($parent_id);
	// var_dump($list_child);
	if ($list_child != NULL) {
		foreach ($list_child as $key => $value) {
			// var_dump($value);
			// echo json_encode($value);
		}
		array_push($arr_child, $list_child);
		// echo json_encode($list_child);
	}
	// echo "<br>";
}
echo json_encode($arr_child);
// echo "<br>child:";

?>