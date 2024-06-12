<?php

class Dashboard_adm extends CI_Controller{

    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id') != '1'
            ){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              </div>');
              redirect('auth/login');
            }
    }

    public function index(){
        $data['menu'] = $this->mnama_menu->tampil_data()->result();
        $this->load->view('templates_adm/header');
        $this->load->view('templates_adm/sidebar');
        $this->load->view('admin/dashboard',$data);
        $this->load->view('templates_adm/footer');
    }

    public function detail_menu($id_menu){
        $data['menu']=$this->mnama_menu->detail_menu($id_menu);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_menu', $data);
        $this->load->view('templates/footer');
    }

}