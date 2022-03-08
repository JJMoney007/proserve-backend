<?php

require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;




function get_ip_address(){
    foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
        if (array_key_exists($key, $_SERVER) === true){
            foreach (explode(',', $_SERVER[$key]) as $ip){
                $ip = trim($ip); // just to be safe

                if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                    return $ip;
                }
            }
        }
    }
}
$dom= new \DOMDocument();
$msg = "Hello Jude Jospeh you have a new contract from IP: ".get_ip_address()."\n you will find the files associated with it in the url https://dev.filebin.net/".$_POST['bin'];

ob_start();
include('template1.php');
$msg .= ob_get_clean();
$dom->loadHTML($msg);
foreach($dom->getElementsByTagName('input') as $input){
    $name_of_input=$input->getAttribute('name');

    if(isset($_POST[$name_of_input])){
        if($input->getAttribute('type')=='checkbox'){
            $input->setAttribute('checked',true);
        }
        else if(strpos($name_of_input,'-radio')!==false){
            if($input->getAttribute('value')==$_POST[$name_of_input]){
                $input->setAttribute('checked',true);
            }

        }
        else{
            $input->setAttribute('value',$_POST[$name_of_input]);
        }
    }
}
$jude='judes.joseph@gmail.com';
$mj='mixture050@gmail.com';
$msg=$dom->saveHtml();
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
$title=' the new title';
if($_POST['first_name_spouse_TAX_ORGANISER']==''){
    $title=$_POST['last_name_taxpayer_TAX_ORGANISER'].'-'.$_POST['first_name_taxpayer_TAX_ORGANISER'].'-'.substr($_POST['social_security_number_taxpayer_TAX_ORGANISER'], -4).'-'.(date('Y')-1);
}
else{
        $title=$_POST['first_name_taxpayer_TAX_ORGANISER'].'-'.$_POST['first_name_spouse_TAX_ORGANISER'].'-'.$_POST['last_name_taxpayer_TAX_ORGANISER'].'-'.substr($_POST['social_security_number_taxpayer_TAX_ORGANISER'], -4).'-'.(date('Y')-1);
    
}
// echo($msg);
// $val=mail($mj,$title,$msg,$headers);


$mail = new PHPMailer(); // create a new object
$mail->IsSMTP();
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 587;
$mail->IsHTML(true);
$mail->Username = "proserveclientcenter@gmail.com";
$mail->Password = "Judes@007";
$mail->SetFrom("proserveclientcenter@gmail.com");
$mail->Subject = $title;
$mail->Body = $msg;
$mail->AddAddress($jude);


 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
?>
