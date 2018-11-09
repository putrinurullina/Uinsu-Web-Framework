<?php

class Home extends Route{
    
    public function index(){
        //$data['mhs'] = $this -> state('homeSt') -> mhsData();
        //$this -> bind('/home/dataBind',$data);
        //$adit = $this -> state('homeSt') -> cetakNama();
        $this -> bind('/home/default');
    }
    
    public function detailMhs($nim)
    {
        $data['mhs'] = $this -> state('homeSt') -> mhsDetail($nim);
        $this -> bind('/home/dataDetail',$data);
    }

    public function tambah()
    {
        $data['nim'] = '0701163114';
        $data['nama'] = 'Aditia Darma';
        $data['email'] = 'alditha.forum@gmail.com';

        $this -> state('homeSt') -> tambahData();
    }

    public function kontak()
    {
        $this -> bind ('/home/kontak');
    }
    
    public function about()
    {
    }
    
}
