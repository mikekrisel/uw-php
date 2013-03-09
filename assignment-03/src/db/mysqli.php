<?php

/**
 * @namespace db
 **/
namespace db;

/**
 * mysqli connection class
 **/
class mysqli {
	
	/**
	 * hostname
	 * @var string
	 **/
	private $hostname;
	
	/**
	 * username
	 * @var string
	 **/
	private $username;
	
	/**
	 * password
	 * @var string
	 **/
	private $password;
	
	/**
	 * database
	 * @var string
	 **/
	private $database;
	
	/**
	 * result
	 * @var string
	 **/
	protected $result;
	
	/**
   * public __constructor
	 * open a database connection
	 * @param string hostname
	 * @param string username
	 * @param string password
	 * @param string database
	 **/
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
	
	/**
   * public __destruct
	 * close open database connection
	 **/
	public function __destruct() {
		mysqli_close($this->mysqli);
	}
	
	/**
   * public query
	 * query database with paramaters
	 * @param string table to query
	 **/
	public function query($table, $query) {
		$this->result = $this->mysqli->query("SELECT * FROM $table WHERE $query");
		return mysqli_fetch_assoc($this->result);
	}
	
	/**
   * public update
	 * make update to table in database
	 * @param string table to make update to
	 * @param string query to run
	 **/
	public function update($table, $query) {
		$this->result = $this->mysqli->query("UPDATE $table SET $query");
		if ($this->mysqli->errno) {
			echo "Failed to make UPDATE to MySQL: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
		}
	}
	
	/**
   * public delete
	 * make delete from table in database
	 * @param string table to make delete from
	 **/
	public function delete($table, $query) {
		$this->result = $this->mysqli->query("DELETE FROM $table WHERE $query");
		if ($this->mysqli->errno) {
			echo "Failed to make DELETE to MySQL: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
		}
	}
	
	/**
   * public insert
	 * make insert into table in database
	 * @param string table to make the insert into
	 * @param string column to insert into
	 * @param string values to insert into the column
	 **/
	public function insert($table, $columns, $values) {
		$this->result = $this->mysqli->query("INSERT INTO $table ($columns) VALUES ($values)");
		if ($this->mysqli->errno) {
			echo "Failed to make INSERT to MySQL: (" . $this->mysqli->errno . ") " . $this->mysqli->error;
		}
	}

}

?>