<?php

class Route{
    public function bind($blade, $data = [])
    {
        require_once 'engine/bind/'.$blade.'.bind.php';    
    }

    public function state($state)
    {
        require_once 'engine/state/'.$state.'.php';
        return new $state;
    }
    
    public function randomString($length)
    {
     $data['string'] = str_shuffle(BASE_STRING_64);
    return $length;
    }
    
    public function checkEmail($email[],$data,$status)
    {
       
    }
    
    public function uploadFoto($path,$newPath)
    {
        move_uploaded_files($path,$newPath);
    }
    
    public function sendEmail($sender, $receiver, $message)
    {
         $dataResponse = [
        'status' : 'berhasil',
        'pengirim' : $sender,
        'penerima' : $receiver,
        'pesan' : $message
        ];
        
        mail($dataResponse['pengirim'],$dataResponse['penerima'],$dataResponse['pesan']);
        
    }

    public function inputPost($id)
    {
        $id = $_POST[$id];
        return $id;
    }

    public function inputGet($id)
    {
        $id = $_POST[$id];
        return $id;
    }
    
    public function tesFungsi(){
        echo "Tes fungsi";
    }
}
