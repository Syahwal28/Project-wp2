<?php

class Data_menu extends CI_Controller{

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
        $data['menu']= $this->mnama_menu->tampil_data()->result();
        $this->load->view('templates_adm/header');
        $this->load->view('templates_adm/sidebar');
        $this->load->view('admin/Data_menu', $data);
        $this->load->view('templates_adm/footer');
    }

    public function tambah_menu(){
        $nm_menu= $this->input->post('nm_menu');
        $detail= $this->input->post('detail');
        $kategori= $this->input->post('kategori');
        $harga= $this->input->post('harga');
        $stok= $this->input->post('stok');
        $gambar= $_FILES['gambar']['name'];
        if ($gambar=''){}else{
            $config ['upload_path']='./gambar';
            $config ['allowed_types']='jpg|jpeg|gif|png';
           
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('gambar')){
                echo "Gambar gagal di Upload";
            }else{
                $gambar=$this->upload->data('file_name');
            }
        } 

        $data=array(
            'nm_menu'=>$nm_menu,
            'detail'=>$detail,
            'kategori'=>$kategori,
            'harga'=>$harga,
            'stok'=>$stok,
            'gambar'=>$gambar
        );

        $this->mnama_menu->tambah_menu($data, 'dftr_menu');
        redirect('admin/Data_menu/index');
    }

    public function edit($id){
        $where = array('id_menu' =>$id);
        $data['menu']= $this->mnama_menu->edit_menu($where, 'dftr_menu')->result();

        $this->load->view('templates_adm/header');
        $this->load->view('templates_adm/sidebar');
        $this->load->view('admin/edit_menu', $data);
        $this->load->view('templates_adm/footer');
    }

    public function update(){
        $id = $this->input->post('id_menu');
        $nm_menu = $this->input->post('nm_menu');
        $detail = $this->input->post('detail');
        $kategori = $this->input->post('kategori');
        $harga = $this->input->post('harga');
        $stok = $this->input->post('stok');

        $data = array(
            'nm_menu'=> $nm_menu,
            'detail'=> $detail,
            'kategori'=> $kategori,
            'harga'=> $harga,
            'stok'=> $stok
        );

        $where = array(
            'id_menu'=> $id
        );

        $this->mnama_menu->update_menu($where, $data, 'dftr_menu');
        redirect('admin/Data_menu/index');
    }

    public function hapus ($id){
        $where = array('id_menu' =>$id);

        $this->mnama_menu->hapus_menu($where, 'dftr_menu');
        redirect('admin/Data_menu/index');
    }
}