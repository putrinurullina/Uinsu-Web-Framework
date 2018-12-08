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

public function tambahData()
{
	$this -> bind('/crud/formTambahData');
}

public function proTambahData()
{
	$data['nim'] = $this -> inputPost('nim');
	$data['nama'] = $this -> inputPost('nama');
	$data['email'] = $this -> inputPost('email');
	$data['alamat'] = $this -> inputPost('alamat');
	$data['jurusan'] = $this -> inputPost('jurusan');
	$this -> state('crudSt') -> tambahData($data);
}

public function proUpdateData()
{
	$data['nim'] = $this -> inputPost('nim');
	$data['nama'] = $this -> inputPost('nama');
	$data['email'] = $this -> inputPost('email');
	$data['alamat'] = $this -> inputPost('alamat');
	$data['jurusan'] = $this -> inputPost('jurusan');
	$this -> state('crudSt') -> updateData($data);

}

public function formEdit()
{
	$nim = $this -> inputPost('nim');
	$data['mhsDetail'] = $this -> state('crudSt') -> mhsDetail($nim);
	$this -> bind('crud/formEdit', $data);
}

public function proDeleteData()
{
	$nim = $this -> inputPost('nim');
	$this -> state('crudSt') -> deleteData($nim);
}
	
	public function tesCariBaris()
	{
		
	}
	
	public function hitungBaris($namaTabel)
	{
		
	}


}
