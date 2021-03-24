<?php 

class Res_model{
	private $table = "response";
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function data(){
		$this->db->query('SELECT * FROM '.$this->table);

 		return $this->db->resultSet();
	}

	public function insertData($name, $trying){
		$query = "INSERT INTO ".$this->table. 
					" (name, trying)
					VALUES(
						:name, :trying)";

		$this->db->query($query);
		$this->db->bind('name', $name);
		$this->db->bind('trying', $trying);
		$this->db->execute();

		return $this->db->rowCount();
	}
}