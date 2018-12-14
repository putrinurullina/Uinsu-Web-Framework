<?
/**
* Email core function
* Uinsu Web Framework
*/
mail("someone@example.com","My subject",$msg);

class emailFunction{}

$mailData = new EmailFuntion();

$mailData -> sender = $this -> inputPost('sender');

$mailData -> cc = $this -> inputPost('cc');

$mailData -> message = $this -> inputPost('message');

$mailData -> status = ERR_MAIL_SENDER($mailData);

$mail -> allData = $this -> emailData();
echo json_encode($mailData);

