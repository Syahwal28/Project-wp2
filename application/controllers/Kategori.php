<?php

class Kategori extends CI_Controller{
    public function bakso(){
        $data['bakso'] = $this->mkategori->data_bakso()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('bakso', $data);
        $this->load->view('templates/footer');
    }

    public function ayam(){
        $data['ayam'] = $this->mkategori->data_ayam()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('ayam', $data);
        $this->load->view('templates/footer');
    }

    public function mie(){
        $data['mie'] = $this->mkategori->data_mie()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('mie', $data);
        $this->load->view('templates/footer');
    }

    public function minuman(){
        $data['minuman'] = $this->mkategori->data_minuman()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('minuman', $data);
        $this->load->view('templates/footer');
    }

    public function pelengkap(){
        $data['pelengkap'] = $this->mkategori->data_pelengkap()->result();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pelengkap', $data);
        $this->load->view('templates/footer');
    }
}