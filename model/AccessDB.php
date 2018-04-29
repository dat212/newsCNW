<?php

/**
* Class AccessDB
*/
class AccessDB
{
	private $host = 'localhost',
			$user = 'root',
			$password = 'admin123',
			$dbName = 'test';
	// Connection variable
	public $conn = NULL;
	public function __construct()
	{
		$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
		mysqli_query($this->conn, "SET NAMES 'utf8'");
		if (!$this->conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}
	// Connect function
	public function connect() {
		$this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->dbName);
		if (!$this->conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
	}
	// Close connection
	public function close() {
		if ($this->conn) {
			mysqli_close($this->conn);
		}
	}
	// Query function
	public function query($sql =  null) {
		if ($this->conn) {
			mysqli_query($this->conn, $sql);
		}
	}
	// Count data row
	public function num_rows($sql = null) {
		if ($this->conn) {
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				$row = mysqli_num_rows($query);
				return $row;
			}
		}
	}
	
	/**
	* get data with sql
	* $type = 0 fetch all data
	* $type = 1 fetch one row
	*/
	public function fetch_assoc($sql = null, $type) {
		// echo "Connect success";
		if ($this->conn) {
			
			$query = mysqli_query($this->conn, $sql);
			if ($query) {
				if ($type == 0) {
					$data = null;
					while ($row = mysqli_fetch_assoc($query)) {
						$data[] = $row;
					}
					return $data;
				} else if ($type == 1) {
					$data = mysqli_fetch_assoc($query);
					return $data;
				}
			}
		}
	}

	public function getCategory($type = null)
	{
		if ($type == null || $type == 'root') {
			$sql = "SELECT * FROM categories WHERE parent_id = '0' ";
			// var_dump($sql);
			$data = $this->fetch_assoc($sql, 0);
			// var_dump($this->fetch_assoc($sql, 0));
			return $data;
			// return json_encode($data);	
		}
		// else if ($type == 'root') {
		// 	$sql = "SELECT label FROM categories WHERE parent_id = '0' ";
		// 	// var_dump($sql);
		// 	$data = $this->fetch_assoc($sql, 0);
		// 	// var_dump($this->fetch_assoc($sql, 0));
		// 	return $data;
		// }
		else if ($type == 'child') {
			$sql = "SELECT label FROM categories WHERE parent_id != '0' ";
			// var_dump($sql);
			$data = $this->fetch_assoc($sql, 0);
			// var_dump($this->fetch_assoc($sql, 0));
			return $data;
		}
		else if (is_numeric($type)) {
			$sql = "SELECT label, sort, parent_id FROM categories WHERE parent_id = $type  ORDER BY sort ASC" ;
			// var_dump($sql);
			$data = $this->fetch_assoc($sql, 0);
			// var_dump($data);
			// var_dump($this->fetch_assoc($sql, 0));
			return $data;
			
		}
		
	}

	public function getLatestPost($limit)
	{

		$sql = "SELECT * FROM posts WHERE status = '1' ORDER BY id_post DESC LIMIT  $limit";
		
		$data = $this->fetch_assoc($sql, 0);
		// var_dump($this->fetch_assoc($sql, 0));
		return $data;
		
	}

	public function getListPost()
	{
		// echo "123";
		// $id = 0;
		$arr_list_post = array();
		$root_category = $this->getCategory();
		// $sql = "SELECT * FROM posts WHERE cate_1_id = $id OR cate_2_id = $id
		// ";	
		// var_dump($arr_list_post);
		// var_dump($root_category);
		// echo $root_category[0]['id_cate'];
		// $list_post = $this->fetch_assoc($sql, 0);
		foreach ($root_category as $key => $value) {
			$id = $value['id_cate'];
			$sql = "SELECT * FROM posts WHERE cate_1_id = $id OR cate_2_id = $id
			";	
			// echo $sql;
			$my_list_post = $this->fetch_assoc($sql, 0);
			// var_dump($my_list_post);
			// array_push($arr_list_post, $value['label']);
			if ($my_list_post != null) {
				array_push($arr_list_post, $value['label']);
				array_push($arr_list_post, $my_list_post);
				foreach ($my_list_post as $key => $value) {
					// echo "<br>";
					// echo $value['id_post'] . ": " . $value['title'] . "<br>".$value['descr'] . "<br>";	
					// echo "<br>***";
				}
			}
		}
		// var_dump($arr_list_post);
		// echo json_encode($arr_list_post);
		return $arr_list_post;
	}

	public function getContentPost($slug)
	{
		$sql = "SELECT * FROM posts WHERE status= '1' AND slug = '$slug'
		";
		// echo $sql;
		$post = $this->fetch_assoc($sql, 0);
		// var_dump($post);
		return $post;
	}
}
	 $x = new AccessDB();
	 // $x->connect();
	 // $x->getCategory();
	 // // $x->getLatestPost();
	 // echo "<br>*************<br>";
	 // $x->getCategory(1);
	 // $x->getListPost();
	 // $x->getPost("'liverpool-de-vao-chung-ket-cup-c1-nho-messi-ai-cap-con-dien-cua-klopp.php'");
	 // $x->getPost("liverpool-de-vao-chung-ket-cup-c1-nho-messi-ai-cap-con-dien-cua-klopp.php");

?>