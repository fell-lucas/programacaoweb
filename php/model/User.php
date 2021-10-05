<?php

class User{

    // adicionar atributos?

    // adicionar construtor
    
    public function get($user_id)
	{
		$query = $this->db->get_where('users', array('id' => $user_id));
		return $query->row_array();
	}

	public function getAll()
	{
		$query = $this->db->get('users');
		return $query->result();
	}

    public function insert($user){
        return $this->db->insert('users', $user);
    }
    public function update($id, $user){
        $this->db->where('id', $id);
        return $this->db->update('id', $user);
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