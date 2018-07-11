<?php

$servername="localhost";
$username="root";
$password="";
$database="res";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn) {
	die("Unable to connect");
}


if(isset($_POST['send']))
{

$id=$_POST["id_get"];
$get_email="SELECT email from users where id='$id'";
$get_email_imp=mysqli_query($conn,$get_email);

while($row=$get_email_imp->fetch_assoc())
    {
    	$email=$row["email"];
    }

require 'PHPMailer/PHPMailerAutoload.php';
$name=$_POST['name'];
$email_of_requester=$_POST['email'];
$mail = new PHPMailer;

$mail->isSMTP();                                   // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                            // Enable SMTP authentication
$mail->Username = 'shubham.anuraj.s@gmail.com';          // SMTP username
$mail->Password = 'Shubham18!'; // SMTP password
$mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                 // TCP port to connect to
$k=0;
$mail->setFrom('shubham.anuraj.s@gmail.com', 'Shubham');
$mail->addReplyTo('shubham.anuraj.s@gmail.com', 'Shubham');
$mail->addAddress($email);   // Add a recipient
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

$mail->isHTML(true);  // Set email format to HTML

$bodyContent = '<h1>CarPoolers Request</h1>';
$bodyContent .='<p><b>You have got a request from a customer for your time. Feel free to contact and confirm the time with the customer.</b></p>';
$bodyContent .= '<p><b>Name:'.$name.'</b></p><p><b>   E-mail:'.$email_of_requester.'</b></p>';
$mail->Subject = '||CarPoolers Request||';
$mail->Body    = $bodyContent;

if(!$mail->send()) {

    header("Location: errormsg.php");

} else {
    header("Location: success.php");
}
}

?>