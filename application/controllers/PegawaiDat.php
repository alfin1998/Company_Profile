<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PegawaiDat extends CI_Controller {

	public function index()
	{
		$this->load->helper('url','form');
		$this->load->model('pegawai_model2');
		$data['pegawai_list'] = $this->pegawai_model2->getDataPegawai();
		$this->load->view('pegawai', $data);
	}

	public function create()
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->load->model('pegawai_model2');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'ALamat', 'trim|required');
		$this->form_validation->set_rules('tglLahir', 'Tgl Lahir', 'trim|required');

		

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_pegawai_view');
		}
		else
		{
			$config['upload_path']		= './assets/gambar';
			$config['allowed_types']	= 'gif|jpg|png';
			$config['max_size']			= 1000000000;
			$config['max_width']		= 10240;
			$config['max_height']		= 7680;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('foto'))
			{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('tambah_pegawai_view', $error);
			}

			else
			{
				$this->pegawai_model2->insertPegawai();
				$this->load->view('tambah_pegawai_data');

			}
		}

	}

	public function update($id)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('alamat', 'ALamat', 'trim|required');
		$this->form_validation->set_rules('tanggalLahir', 'Tgl Lahir', 'trim|required');

		$this->load->model('pegawai_model2');
		$data['pegawai'] = $this->pegawai_model2->getPegawai($id);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_pegawai_view',$data);
		}
		else
		{
			$this->pegawai_model2->updateById($id);
			$this->load->view('edit_pegawai_data');
		}
	}

	public function deleteData($id)
	{
		$this->load->helper("url");
		$this->load->model("pegawai_model2");
		$this->pegawai_model2->delete($id);
		redirect('pegawai');
	}
}

