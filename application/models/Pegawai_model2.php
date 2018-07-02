<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Pegawai_model2 extends CI_Model
	{
		public function getDataPegawai()
		{
			$query = $this->db->get("pegawai");
			return $query->result_array();
		}
		public function insertPegawai()
		{
			$tgl=$this->input->post('tanggalLahir');
			$tglBaru=date_format(new DateTime($tgl),"Y-m-d");
			$object = array(
				'namaPegawai' => $this->input->post('namaPegawai'),
				'alamatPegawai' => $this->input->post('alamatPegawai'),
				'nipPegawai' => $this->input->post('nipPegawai'),
				'tanggalLahir' => $tglBaru,
				'foto' =>$this->upload->data('file_name'));
			$this->db->insert('pegawai', $object);

		}

		public function getPegawai($idPegawai)
		{
			$this->db->where('idPegawai', $idPegawai);
			$query = $this->db->get('pegawai');
			return $query->result();
		}

		public function updateById($idPegawai)
		{
			$data = array(
				'namaPegawai' => $this->input->post('namaPegawai'),
				'nipPegawai' => $this->input->post('nipPegawai'),
				'tanggalLahir' => $this->input->post('tanggalLahir'),
				'alamatPegawai' => $this->input->post('alamatPegawai'),
			);
			$this->db->where('idPegawai', $idPegawai);
			$this->db->update('pegawai', $data);
		}
		public function delete($idPegawai) { 
         if ($this->db->delete("pegawai", "idPegawai = ".$idPegawai)) { 
            return true; 
         } 
      } 
	}

?>