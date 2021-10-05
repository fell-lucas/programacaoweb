<?php

class User{

    // adicionar atributos?

    // adicionar construtor
    
    public function get($recipe_id)
	{
		$query = $this->db->get_where('users', array('id' => $recipe_id));
		return $query->row_array();
	}

	public function getAll()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

    public function insert($recipe){
        return $this->db->insert('users', $recipe);
    }
    public function update($id, $recipe){
        $this->db->where('id', $id);
        return $this->db->update('id', $recipe);
    }

    public function delete($id){
        $this->db->where('id', $id);
        return $this->db->delete('id');
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