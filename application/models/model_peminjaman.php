<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_peminjaman extends CI_Model
{
    public $nopeminjaman;

    function __construct(){
        parent::__construct();
    }

    public function get_peminjaman()
    {
        return $this->db->get('peminjaman')->result_array();
    }

    function tambah_peminjaman($data){
        return $this->db->insert('peminjaman', $data);
    }

    public function edit_peminjaman($data, $id){
        $this->db->where('no_peminjaman', $id);
        return $this->db->update('peminjaman', $data);
    }
}