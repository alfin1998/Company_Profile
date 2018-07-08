 <?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class UserList extends CI_Model {
 
    public function getAll()
    {
        $query = $this->db->get('user');
        if($query->num_rows()>0){
            return $query->result();
        }
    }

    public function save()
    {
       $data = array(
                'username' => $this->input->post('username'),
                'password' => md5($this->input->post('password')),
                'level' => $this->input->post('level')
            );
            $this->db->insert('user',$data);
    }

    public function update()
    {
        $id= $this->input->post('id');
        $data= $this->input->post();
        $this->db->where('id', $id)->update('user', $data);
    }

    public function delete()
    {
        $id= $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('user');
    }

 
 }
 
 /* End of file UserList.php */
 /* Location: ./application/models/UserList.php */

 