<?php require_once '../includes/config.php';

class MainFunc
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

    if($result->num_rows > 0) {
      return $result->fetch_assoc();
    }

		return $this;
	}

	public function get_all_settings() {
    $result = $this->conn->query("SELECT * FROM `settings`");
    return $result->fetch_assoc();
	}

	public function get_all_tree_names() {
    $all_names = array();

    $result = $this->conn->query("SELECT * FROM `tree_names`");

		if($result->num_rows > 0)
    {
      while ($row = $result->fetch_assoc()) {
        array_push($all_names, $row);
      }
    }

		return $all_names;
	}

	public function get_all_occasion() {
    $all_occasion = array();

    $result = $this->conn->query("SELECT * FROM `occasion`");

		if($result->num_rows > 0)
    {
      while ($row = $result->fetch_assoc()) {
        array_push($all_occasion, $row);
      }
    }

		return $all_occasion;
	}

	public function get_all_galleries() {
    $all_galleries = array();

    $result = $this->conn->query("SELECT * FROM `gallery`");

		if($result->num_rows > 0)
    {
      while ($row = $result->fetch_assoc()) {
        array_push($all_galleries, $row);
      }
    }

		return $all_galleries;
	}
}
