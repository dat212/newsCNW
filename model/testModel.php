<?php

// $host = 'localhost';
// $user = 'root';
// $password = 'admin123';
// $dbName = 'test';
// $conn = mysqli_connect($host, $user, $password, $dbName);
// if (!$conn) {
// 	die("Fail");
// }
// else {
// 	echo "Connect success<br>" ;
// }


// Variable for limit post in latest view
	// $limit = 4;
	// $sql = "
	// SELECT * FROM posts WHERE status = '1' ORDER BY id_post DESC LIMIT  $limit
	// ";
	// $query = mysqli_query($conn, $sql);

	// if ($query) {
	// 	$latest_post = mysqli_fetch_assoc($query);
	// 	// var_dump($latest_post);	
	// }





	// $sql = "SELECT * FROM categories WHERE parent_id = '0' ";
	// $query = mysqli_query($conn, $sql);
	// // echo "$sql";
	// // if ($query) {
	// 	$child_category = mysqli_fetch_assoc($query);
	// 	while ($row = mysqli_fetch_assoc($query)) {
	// 						$child_category[] = $row;}
		
	// 	var_dump($child_category);	
	// }

// die();
		// require_once 'AccessDB.php';	

		// $x = new AccessDB();

		// $listRoot = $x->getCategory();
		// // var_dump($listRoot);
		// $arr = array();
		// echo "<br>value: <br>";
		// foreach ($listRoot as $key => $value) {
		// 	var_dump($value);
		// 	echo $value['label'] . ":" . $value['id_cate'] ;
		// 	{
		// 		// var_dump($x->getCategory(intval($value['id_cate'])));
		// 		$list_child = $x->getCategory(intval($value['id_cate']));
		// 		var_dump($list_child);
		// 		if ($list_child != null) {
		// 			// var_dump($list_child);
		// 			foreach ($list_child as $key => $value) {
		// 			echo $value['label'] . "       ";
		// 			}
		// 		}	
		// 	}
		// 	echo "<br>";
		// }

require_once 'AccessDB.php';
$database = new AccessDB();
$root_category = $database->getCategory();
// var_dump($root_category);

// Get posts

function getListPost($database, $id)
{
	// echo "1";
	$sql = "
	SELECT * FROM posts WHERE cate_1_id = $id OR cate_2_id = $id
	";	
	// var_dump($database);
	$list_post = $database->fetch_assoc($sql, 0);
	// var_dump($list_post);
	echo "<br>";
	// echo json_encode($list_post);
	echo "<br>";	
	return $list_post;
}

// $id = "2";
// $sql = "
// SELECT * FROM posts WHERE cate_1_id = $id OR cate_2_id = $id
// ";
// getListPost($database, 1);

// echo $list_post[3]['title'];
$arr_list_post = array();

foreach ($root_category as $key => $value) {
	echo "<br>";
	echo $value['label'] . "&nbsp;&nbsp;&nbsp;" . $value['id_cate'];
	echo "<br>";
	$my_list_post = getListPost($database, $value['id_cate']);
	if ($my_list_post != null) {
		array_push($arr_list_post, $my_list_post);
		foreach ($my_list_post as $key => $value) {
		echo "<br>";
		echo $value['id_post'] . ": " . $value['title'] . "<br>".$value['descr'] . "<br>";	
		echo "<br>***";
		}
	}
}
var_dump($arr_list_post);
echo json_encode($arr_list_post);
echo "<br>";
?>

