<?php
//include mailC.php file
include('./mailC.php');
$MailChimp = new MailChimp('4bc5602cf2ea3fcf8ecd35e9f09866f1-us17');
// to get list
//$result = $MailChimp->get('lists');





if ($_SERVER["REQUEST_METHOD"]=="POST") {

	$mail=$_POST['mail'];
 

$list_id = '62f48165c9';

// add subscriber to mail list
$result = $MailChimp->post("lists/$list_id/members", [
				'email_address' => $mail,
				'status'        => 'subscribed',
			]);


//print_r($result);
if ($result['status']=="subscribed") {
	echo "ok";
}
elseif ($result['status']=="400") {
	echo "fake";
}

 }