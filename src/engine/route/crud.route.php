<?php

class crud extends Route{


public function index()
{
	$this -> bind('/crud/default');

}

public function tampilMahasiswa()
{
	$data['mhs'] = $this -> state('crudSt') -> mhsDataAll();
	$this -> bind('/crud/tampilData',$data);
}

public function tampilMahasiswaDetail()
{

}

public function formEdit()
{
	$nim = $this -> inputPost('nim');
	$data['mhsDetail'] = $this -> state('crudSt') -> mhsDetail($nim);
	$this -> bind('/crud/formEdit', $data);

}


}
