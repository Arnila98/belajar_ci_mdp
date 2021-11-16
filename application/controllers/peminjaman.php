<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class peminjaman extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('model_peminjaman');
        
    }



    public function index()
	{
        $data['peminjaman'] = $this->model_peminjaman->get_peminjaman();
        // echo var_dump($data);
        // die();
		$this->load->view('Home_Peminjaman', $data);
	}

    public function tambah()
    {
        $nopeminjaman = rand();
        $no = $this->input->post('no');
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $tanggal = $this->input->post('tanggal');
        $bunga = $jumlah*0.02;
        $total = $jumlah+$bunga;
        

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
            'jumlah' => $jumlah,
            'tanggal' => $tanggal,
            'bunga' => $bunga,
            'total' => $total
    );

        $this->model_peminjaman->tambah_peminjaman($data);
        redirect('peminjaman/index');
    }

    public function edit($id){
        $nopeminjaman = rand();
        $no = $this->input->post('no');
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $tanggal = $this->input->post('tanggal');
        $bunga = $jumlah*0.02;
        $total = $jumlah+$bunga;

        $data=array(
            'no_peminjaman' => $nopeminjaman,
            'no' => $no,
            'nama' => $nama,
            'jumlah' => $jumlah,
            'tanggal' => $tanggal,
            'bunga' => $bunga,
            'total' => $total
      
        );  
    
        $this->model_peminjaman->edit_peminjaman($data, $id);
        redirect('peminjaman/index');
        }

}