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

	public function getAllByUserId($userId)
	{
		$sql = "SELECT * FROM recipes WHERE user=$userId";
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
		$sql = "INSERT INTO RECIPES $recipe";
		$result = $this->db->query($sql)->fetch();

		return $result;
	}
	public function update($id, $recipe){
		$sql = "UPDATE RECIPES WHERE ID = $id RECIPES $recipe";
		$result = $this->db->query($sql)->fetch();
		return $result;
	}

	public function delete($id){
		$sql = "DELETE FROM RECUPES WHERE ID =  $id";
		$result = $this->db->query($sql)->fetch();
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