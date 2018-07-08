<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'DAFTAR PEGAWAI CONEYKO COMPANY',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID',1,0);
        $pdf->Cell(85,6,'NAMA',1,0);
        $pdf->Cell(27,6,'TGL LAHIR',1,0);
        $pdf->Cell(25,6,'ALAMAT',1,1);
        // $pdf->Cell(25,6,'FOTO FORMAT',1,1);
        $pdf->SetFont('Arial','',10);
        $pegawai = $this->db->get('pegawai')->result();
        foreach ($pegawai as $row){
            $pdf->Cell(20,6,$row->id,1,0);
            $pdf->Cell(85,6,$row->nama,1,0);
            $pdf->Cell(27,6,$row->tanggalLahir,1,0);
            $pdf->Cell(25,6,$row->alamat,1,1); 
            // $pdf->Cell(25,6,$row->foto,1,1); 
        }
        $pdf->Output();
    }
}
// 'namaPegawai' => $this->input->post('namaPegawai'),
//                 'alamatPegawai' => $this->input->post('alamatPegawai'),
//                 'nipPegawai' => $this->input->post('nipPegawai'),
//                 'tanggalLahir' => $tglBaru,
//                 'foto' =>$this->upload->data('file_name'))