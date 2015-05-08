<?php
/*
contact.php
to add the contact in DB and send mail to DC support
*/
include('class.phpmailer.php');
include('class.smtp.php');
require_once('db.php');
$email=NULL;
$location=NULL;
$time=NULL;
$message=NULL;
$mail_sent=0;
$result=array();
$lname="";
$subject="";
if($_POST['fname']!=NULL && $_POST['email']!=NULL && $_POST['subject']!=NULL && $_POST['message']!=NULL)
{
	$fname=$_POST['fname'];
	$email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
}	
else
{
	$result['success']=-1;
	$result['msg']='Invalid params';
	echo json_encode($result);
	exit;
}

if(isset($_POST['lname']))
{
	$lname=$_POST['lname'];
}
$mail_subject = 'New Enquiry - Digital Chakra';
$mail_message = 'Name : '.$fname.''.$lname.'<br />'.'Email: '.$email.'<br />Subject: '.$subject.'<br />Message: '.$message.'<br />';
//if (smtpmailer('queries@digitalchakra.in', 'webmaster.digitalchakra@gmail.com', 'Admin', $mail_subject, $mail_message))
if (smtpmailer('mani.r@mtlabs.in', 'webmaster.digitalchakra@gmail.com', 'Admin', $mail_subject, $mail_message))
{
	$mail_sent=1;
}


$query="INSERT INTO `tbl_contact` (`fname`, `lname`, `email`, `message`, `subject`, `mail_sent`) VALUES ('$fname', '$lname', '$email', '$message', '$subject', '$mail_sent')";
echo $query;
if(mysql_query($query))
{
	$result['success']=1;
}
else
{
	$result['success']=-1;
	$result['msg']='Failed';
}
echo json_encode($result);

function smtpmailer($to, $from, $from_name, $subject, $body) { 
	mail($to, $subject, $message);
	// global $error;
	// $mail = new PHPMailer();  // create a new object
	// $mail->IsSMTP(); // enable SMTP
	// $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	// $mail->SMTPAuth = true;  // authentication enabled
	// $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	// $mail->Host = 'smtp.gmail.com';
	// $mail->Port = 465; 
	// $mail->Username = 'webmaster.digitalchakra@gmail.com';  
	// $mail->Password = '#digitalchakra123';           
	// $mail->SetFrom($from, $from_name);
	// $mail->IsHTML(true);
	// $mail->Subject = $subject;
	// $mail->Body = $body;
	// $mail->AddAddress($to);
	// if(!$mail->Send()) {
	// 	return false;
	// } else {
	// 	return true;
	// }
}
?>
