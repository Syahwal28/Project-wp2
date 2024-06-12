<?php

class Dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();

        if($this->session->userdata('role_id')!= '2'
            ){
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
                Anda Belum Login!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
              </div>');
              redirect('auth/login');
            }
    }

    public function masukan_keranjang($id){
        $menu = $this->mnama_menu->find($id);

        $data = array(
            'id' => $menu->id_menu,
            'qty'=> 1,
            'price'=>$menu->harga,
            'name'=>$menu->nm_menu
        );

        $this->cart->insert($data);
        redirect('welcome');
    }

    public function detail_keranjang(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('keranjang');
        $this->load->view('templates/footer');
    }

    public function hapus_keranjang(){
        $this->cart->destroy();
        redirect('welcome');
    }

    public function pembayaran(){
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
    }

    public function proses_pesanan(){
        $is_processed=$this->minvoice->index();
        if($is_processed){
            $this->cart->destroy();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');

        }else{
            echo "Maaf, Pesanan Anda Gagal di proses";
        }
    }

    public function detail_menu($id_menu){
        $data['menu']=$this->mnama_menu->detail_menu($id_menu);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('detail_menu', $data);
        $this->load->view('templates/footer');
    }
}