<?php

namespace db;

class db {

	private $hostname;
	private $username;
	private $password;
	private $database;
	private $rows;
	public $result;
	
	public function __construct($hostname, $username, $password, $database) {
		$this->hostname = $hostname;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
		$this->mysqli = new \mysqli($this->hostname, $this->username, $this->password, $this->database);
		if ($this->mysqli->connect_errno) {
			echo "Failed to connect to MySQL: (" . $this->mysqli->connect_errno . ") " . $this->mysqli->connect_error;
		}
	}
	
	public function __destruct() {
		mysqli_close($this->mysqli);
	}
	
	public function query($table) {
		$this->result = $this->mysqli->query("SELECT * FROM $table");
		$this->values = [];
		foreach($this->result as $values) {
			$this->values[] = $values;
		}
		return $this->values;
	}
	
	public function update($table, $query) {
		$this->result = $this->mysqli->query("UPDATE $table SET $query");
		if ($this->mysqli->errno) {
			echo "Failed to make UPDATE to MySQL: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
		}
	}
	
	public function delete($table, $query) {
		$this->result = $this->mysqli->query("DELETE FROM $table WHERE $query");
		if ($this->mysqli->errno) {
			echo "Failed to make DELETE to MySQL: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
		}
	}
	
	public function insert($table, $columns, $values) {
		$this->result = $this->mysqli->query("INSERT INTO $table ($columns) VALUES ($values)");
		if ($this->mysqli->errno) {
			echo "Failed to make INSERT to MySQL: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
		}
	}

}

?>