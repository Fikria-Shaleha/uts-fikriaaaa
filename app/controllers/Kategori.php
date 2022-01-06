<?php

class Kategori extends Controller {
    public function index ()
{
        $data['title'] = 'Data Kategori';
        $data['kategori'] = $this->model('KategoriModel')->getAllKategori();
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
}

public function cari()
{

}

public function edit($id){
 
}

public function tambah(){

}

public function simpanKategori(){

}

public function hapus ($id){

    }
}
