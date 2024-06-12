<?php

class minvoice extends CI_Model{
    public function index(){
        date_default_timezone_set('Asia/Jakarta');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $no_telp=$this->input->post('no_telp');
        
        $invoice=array(
            'nama'=>$nama,
            'alamat'=>$alamat,
            'no_telp'=>$no_telp,
            'tgl_pesan'=>date('Y-m-d H:i:s'),
        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice=$this->db->insert_id();

        foreach ($this->cart->contents() as $item){
            $data= array(
                'id_invoice' => $id_invoice,
                'id_menu' =>$item['id'],
                'nm_menu' =>$item['name'],
                'jumlah' =>$item['qty'],
                'harga' => $item['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        }

        return TRUE;
    }

    public function tampil_data(){
        $result= $this->db->get('tb_invoice');
        if($result->num_rows() > 0){
            return $result->result();
        }else{
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice){
        $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() >0){
            return $result->row();
        }else{
            return false;
        }
    }
    
    public function ambil_id_pesanan($id_invoice){
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if ($result->num_rows() >0){
            return $result->result();
        }else{
            return false;
        }
    }
}