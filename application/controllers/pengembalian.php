<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_pengembalian');
    }

    public function index()
	{
		$this->load->view('Home_Pengembalian');
	}

    public function tambah()
    {
        $nopeminjaman = $this->input->post('no_peminjaman');
        $no = $this->input->post('no');
        $nama = $this->input->post('tempat_lahir');
        $sisapengembalian = $this->input->post('sisa_pengembalian');
        $tanggal = $this->input->post('tanggal');
        $pengembalianke = $this->input->post('pengembalian_ke');
        $jumlah = $this->input->post('jumlah');
      

        // echo $nama;
        // echo "</br>";
        // echo $alamat;
        // echo "</br>";
        // echo $tempat_lahir;
        // echo "</br>";
        // echo $tanggal_lahir;
        // echo "</br>";
        // echo $jenis_kelamin;
        // echo "</br>";
        // echo $pekerjaan;
        // echo "</br>";
        // echo $status;
        // echo "</br>";
        // echo $tanggal_masuk;
        // echo "</br>";
        // echo $username;
        // echo "</br>";
        // echo $password;
        // echo "</br>";
        // echo $hak_akses;
        // echo "</br>";
        // die();
 
        $data=array(
            'no_peminjaman' => $nopeminjaman,
            'no' => $no,
            'nama' => $nama,
            'sisa_pengembalian' => $sisapengembalian,
            'tanggal' => $tanggal,
            'pengembalian_ke' => $pengembalianke,
            'status' => $jumlah,
    );

        $this->model_pengembalian->tambah_pengembalian($data);
        redirect('pengembalian/index');
    }


}