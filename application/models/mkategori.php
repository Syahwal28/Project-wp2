<?php

class mkategori extends CI_Model{
    public function data_bakso(){
        return $this->db->get_where('dftr_menu', array('kategori'=>'bakso'));
    }

    public function data_ayam(){
        return $this->db->get_where('dftr_menu', array('kategori'=>'ayam'));
    }

    public function data_mie(){
        return $this->db->get_where('dftr_menu', array('kategori'=>'mie'));
    }

    public function data_minuman(){
        return $this->db->get_where('dftr_menu', array('kategori'=>'minuman'));
    }

    public function data_pelengkap(){
        return $this->db->get_where('dftr_menu', array('kategori'=>'pelengkap'));
    }

}

