<?php

class Recipe{

	protected PDO $db;

	public function __construct(PDO $db) {
			$this->db = $db;
	}

	public function get($recipe_id)
	{
		$sql = "SELECT * FROM recipes WHERE id = $recipe_id";
		$result = $this->db->query($sql)->fetch();
		return $result;
	}

	public function getAll()
	{
		$sql = "SELECT * FROM recipes";
		$result = $this->db->query($sql)->fetchAll();
		return $result;
	}

	public function getAllOrderByAccess()
	{
		$sql = "SELECT * FROM recipes ORDER BY access DESC LIMIT 4";
		$result = $this->db->query($sql)->fetchAll();
		return $result;
	}

	public function accessIncrease($recipe_id){
		$recipe = $this->get($recipe_id);
		$newCount = $recipe['access'];
		$newCount++;
		$sql = "UPDATE recipes SET access=$newCount WHERE id = $recipe_id";
		$result = $this->db->query($sql);
		return null;
	}

	public function insert($recipe){
		return $conn->insert('recipes', $recipe);
	}
	public function update($id, $recipe){
		$conn->where('id', $id);
		return $conn->update('id', $recipe);
	}

	public function delete($id){
		$conn->where('id', $id);
		return $conn->delete('id');
	}

    //function getById($id)
	//{
	//	$this->db->select('*');
	//	$this->db->from('users');
	//	$this->db->where('id', $id);
	//	$query = $this->db->get();
	//	return $query->result_array();
	//}

}

?>