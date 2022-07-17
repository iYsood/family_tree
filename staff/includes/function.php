<?php require_once '../includes/config.php';

class Users
{
	private $conn;
	public $id;

	public function __construct() {
		global $conn;
		$this->conn = $conn;
	}

	public function get_all() {
    $all_users = array();

    $result = $this->conn->query("SELECT * FROM `users`");

    if($result->num_rows > 0)
    {
      while ($row = $result->fetch_assoc()) {
        array_push($all_users, $row);
      }

      return $all_users;
    }

		return 'حصل خطأ في تحضير بيانات المستخدمين';
	}

	public function select($id) {
    $result = $this->conn->query("SELECT * FROM `users` WHERE `id` = '$id'");

    if($result->num_rows > 0)
    {
      return $result->fetch_assoc();
    }

		return $this;
	}
}
