<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class model_pengembalian extends CI_Model
{
    function __construct(){
        parent::__construct();
    }

    function tambah_pengembalian($data){
        return $this->db->insert('pengembalian', $data);
    }
}