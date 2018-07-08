<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PendidikanDat extends CI_Controller {

	public function byID($idPegawai)
	{
		$this->load->helper('url');
		$data['idPegawai'] = $idPegawai;
		$this->load->model('Pegawai_model');
		$data['pegawai'] = $this->Pegawai_model->getPegawai($idPegawai);
		$this->load->model('Pendidikan_model');
		$data["pendidikan_list"] = $this->Pendidikan_model->getPendidikanByIdJabatan($idPegawai);
		$this->load->view('pendidikan_view', $data);
	}

	public function create($idPegawai)
	{
		$data['idPegawai'] = $idPegawai;
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaSekolah', 'Nama Sekolah', 'required');
		$this->load->model('Pendidikan_model');
		if($this->form_validation->run()==FALSE)
		{
			$this->load->view('tambah_pendidikan_view',$data);
		}
		else
		{
			$this->Pendidikan_model->insertPendidikan($idPegawai);
			redirect('PendidikanDat/byID/'.$idPegawai,'refresh');

		}
	}

	public function update($idPegawai,$idPendidikan)
	{
		$this->load->helper('url','form');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('namaSekolah', 'Nama Sekolah', 'trim|required');

		$this->load->model('Pendidikan_model');
		$data['idPegawai'] = $idPegawai;
		$data['idPendidikan'] = $idPendidikan;
		$data['pendidikan'] = $this->Pendidikan_model->getPendidikan($idPendidikan);

		if ($this->form_validation->run()==FALSE)
		{
			$this->load->view('edit_pendidikan_view',$data);
		}
		else
		{
			$this->Pendidikan_model->updateById($idPendidikan);
			redirect('PendidikanDat/byID/'.$idPegawai,'refresh');
		}
	}

	public function deleteData($idPegawai,$idPendidikan)
	{
		$this->load->helper("url");
		$this->load->model("Pendidikan_model");
		$this->Pendidikan_model->delete($idPendidikan);
		redirect('PendidikanDat/byID/'.$idPegawai,'refresh');
	}

}

/* End of file Jabatan.php */
/* Location: ./application/controllers/Jabatan.php */
 ?>