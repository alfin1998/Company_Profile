<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserGrid extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
       

	   parent::__construct();
        if($this->session->userdata('logged_in')){
            $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];
            $data['level'] = $session_data['level'];
            $current_controller = $this->router->fetch_class();
            $this->load->library('acl');
            if (! $this->acl->is_public($current_controller))
            {
                if (! $this->acl->is_allowed($current_controller, $data['level']))
                {
                    echo '<script>alert("Khusus Admin")</script>';
                    redirect('pegawai','refresh');
                }
            }
        }else{
            redirect('Dinamis','refresh');
        }
    }

    public function Index()
    {
        $session_data=$this->session->userdata('logged_in');
        $data['username']=$session_data['username'];
        $this->load->view('Dinamis',$data);
    }
	/*
    public function news()
    {
        $this->load->view ('news');
    }
    public function about()
    {
        $this->load->view ('about');
    }

    public function contact()
    {
        $this->load->view('contact');
    }
*/
     public function Dinamis()
    {
        $this->load->view('Dinamis');
    }

    public function getAll()
    {
        $this->load->model('UserList');
        $result = $this->UserList->getAll(); 
       header("Content-Type: application/json");
        echo json_encode($result);
    }

    public function add(){
        $this->load->model('UserList');
        $this->UserList->save();
    }

     public function update(){
        $this->load->model('UserList');
        $this->UserList->update();
    }

    public function delete()
    {
        $this->load->model('UserList');
        $id = $this->input->post('id'); 
        $this->UserList->delete($id);
    }
}



