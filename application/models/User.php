<?php
	 defined('BASEPATH') OR exit('No direct script access allowed');
	 
	 class User extends CI_Model
	 {
	 public function login($username,$password)
	 	{
	 		$this->db->select('id,username,password,level');
	 		$this->db->from('user');
	 		$this->db->where('username',$username);
	 		$this->db->where('password', MD5($password));
	 		$query = $this->db->get();
	 		if($query->num_rows()==1){
	 			return $query->result();
	 		}else{
	 			return false;
	 		}
	 		
	 	}
	 
	 	
	 public function insert()
	 	{
	 		$data = array(
	 			'username' => $this->input->post('username'),
	 			'password' => md5($this->input->post('password')),
	 			'level' => $this->input->post('level')
	 		);
	 		$this->db->insert('user',$data);
	 	}

	 public function getAll()
    {
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
        $data= $this->input->post();
        $this->db->insert('user', $data);
    }

    public function update()
    {
        $id= $this->input->post('id');
        $password= $this->input->post('password');
        $data= $this->input->post();
        $this->db->where('id', $id)->update('user', $data);
        $this->db->where('password', MD5($password));
    }

    public function delete()
    {
        $id= $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}
	 
