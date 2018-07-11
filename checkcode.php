<html>
<head>
	<title>|TheCarPoolers|</title>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link rel="stylesheet" href="design.css">
</head>



<font face="tahoma">

<div class="card1"><h1 class="title"><strong>TheCarPoolers</strong></h1></div>
<hr />

<?php
$servername="localhost";
$username="root";
$password="";
$database="res";

$conn=mysqli_connect($servername,$username,$password,$database);


if(!$conn) {
	die("Unable to connect");
}
/*
$reasons = array("password" => "Wrong Code or Password", "blank" => "You have left one or more fields blank."); 
	if (isset($_GET["loginFailed"]))
	{
	
	echo $reasons[$_GET["reason"]];
	echo '<form id="form1" method="post" action="checkcode.php">
	<input type="hidden" name="date" value='.$date.'>  
	<input type="hidden" name="name" value='.$name.'> 
	<input type="hidden" name="loc1" value='.$loc1.'>  
	<input type="hidden" name="loc2" value='.$loc2.'> 
	<input type="hidden" name="email" value='.$email.'>
	<input type="submit" value="Go Back" name="find">
	</form>
	<hr>';

	} 
	*/

if(isset($_POST["find"])){
	//onclick="Javascript:window.location.href = \'checkcode.php\';"
	$name=$_POST['name'];
	$loc1=$_POST['loc1'];
	$loc2=$_POST['loc2'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	

$check_sql="SELECT email FROM users WHERE email='$email';";
$check_sql_imp=mysqli_query($conn,$check_sql);
$checkcount=mysqli_num_rows($check_sql_imp);
if($checkcount==1)
{
    //exit(header("location:index.php?emailExists=true&reason=existing"));
    echo "<script type='text/javascript'>window.location.href = 'login.php?emailExists=true&reason=existing';</script>";
    exit();
} 


    $sql="INSERT INTO users (id,name,loc1,loc2,date,email) VALUES('','$name','$loc1','$loc2','$date','$email')";
    $ins=mysqli_query($conn,$sql);

    

    $idget_sql="select id from users where email='$email';";
    $idget_sql_imp=mysqli_query($conn,$idget_sql);
    $id=1;
    while($row1=$idget_sql_imp->fetch_assoc())
    {
    	$id=$row1["id"];
    }

    $del="DELETE from users where id='$id'";
    $del_imp=mysqli_query($conn,$del);


	
	function randompasscode()
    {
    	$randomcode="";
    	$num=array();
		for($x=48;$x<58;$x++)
		{
		  $num[$x-48]=chr($x);
		}
		$cap_let=array();
		for($y=65;$y<91;$y++)
		{
		  $cap_let[$y-65]=chr($y);
		}
		$small_let=array();
		for($z=97;$z<123;$z++)
		{
		  $small_let[$z-97]=chr($z);
		}

		for($r=0;$r<3;$r++)
		{
			$randomcode .= $small_let[rand(0,25)];
			$randomcode .= $cap_let[rand(0,25)];
			$randomcode .= $num[rand(0,9)];

		}
		return $randomcode;
    }
    $rpass=randompasscode();

    $sql_ins_check="INSERT INTO check_prev VALUES('$id','$rpass');";
    $sql_ins_check_imp=mysqli_query($conn,$sql_ins_check);

require 'PHPMailer/PHPMailerAutoload.php';
	$mail1=new PHPMailer;
	$mail1->isSMTP();                                   // Set mailer to use SMTP
	$mail1->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
	$mail1->SMTPAuth = true;                            // Enable SMTP authentication
	$mail1->Username = 'shubham.anuraj.s@gmail.com';          // SMTP username
	$mail1->Password = 'Shubham18!'; // SMTP password
	$mail1->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
	$mail1->Port = 587;                                 // TCP port to connect to

	$mail1->setFrom('shubham.anuraj.s@gmail.com', 'Shubham');
	$mail1->addReplyTo('shubham.anuraj.s@gmail.com', 'Shubham');
	$mail1->addAddress($_POST['email']);   // Add a recipient
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	$mail1->isHTML(true);  // Set email format to HTML

	$bodyContent1 = '<h1>TheCarPoolers Code and Password</h1>';
	$bodyContent1 .= '<p><b>Code: '.$id.'</b></p><p><b>   Password: '.$rpass.'</b></p>';

	$mail1->Subject = '||TheCarPoolers Code and Password||';
	$mail1->Body    = $bodyContent1;

	if($mail1->send())
	{
		echo "<p>Code and Password have been sent to your given email address for future reference.</p>";
	}
	else{
		
		$del1="DELETE from check_prev where c_id='$id'";
		$del1_imp=mysqli_query($conn,$del1);
                echo "<script type='text/javascript'>window.location.href = 'login.php?emailwrong=true&reason=wrong';</script>";
                exit();
	}



echo '
<center>
	<h1>Enter your code and password sent to your email.</h1>
</center>

<style type="text/css">
#form1,#form2
{
	text-align: center;
}
input
{
	border-radius:5px;
	height: 30px;
}
</style>

<center>
<div class="container">
			<div class="card"></div>
			<div class="card">
				<form method="post" action="inter.php">
					<div class="input-container">
    					<input type="text" name="cid" required>
    					<label for="#{label}">Code</label>
        				<div class="bar"></div>
        			</div>
        			<div class="input-container">
    					<input type="password" name="pass" required>
    					<label for="#{label}">Password</label>
        				<div class="bar"></div>
        			</div>
	<input type="hidden" name="date" value='.$date.'>  
	<input type="hidden" name="name" value='.$name.'> 
	<input type="hidden" name="loc1" value='.$loc1.'>  
	<input type="hidden" name="loc2" value='.$loc2.'> 
	<input type="hidden" name="email" value='.$email.'>

	<div class="input-container">
	<div class="button-container">
	<button><span><input type="submit" name="go" value="Go"></span></button>
	</div>
	</div>
	</div>
	</div>';

	$reasons1 = array("password" => "Wrong Code or Password", "blank" => "You have left one or more fields blank."); 
	if (isset($_GET["loginFailed"]))
	{
	echo '<br>';
	echo $reasons1[$_GET["reason"]];
	} 

echo '
	</strong>
</form>
</center>

<hr>
';

}

if(isset($_POST["refind"])){
	//onclick="Javascript:window.location.href = \'checkcode.php\';"
	$name=$_POST['name'];
	$loc1=$_POST['loc1'];
	$loc2=$_POST['loc2'];
	$date=$_POST['date'];
	$email=$_POST['email'];
	
/*
$check_sql="SELECT email FROM users WHERE email='$email';";
$check_sql_imp=mysqli_query($conn,$check_sql);
$checkcount=mysqli_num_rows($check_sql_imp);
if($checkcount==1)
{
    //exit(header("location:index.php?emailExists=true&reason=existing"));
    echo "<script type='text/javascript'>window.location.href = 'index.php?emailExists=true&reason=existing';</script>";
    exit();
} 
*/

echo '
<center>
	<h1>Enter your code and password sent to your email.</h1>
</center>

<style type="text/css">
#form1,#form2
{
	text-align: center;
}
input
{
	border-radius:5px;
	height: 30px;
}
</style>

<div class="container">
			<div class="card"></div>
			<div class="card">
				<form method="post" action="inter.php">
					<div class="input-container">
    					<input type="text" name="cid" required>
    					<label for="#{label}">Code</label>
        				<div class="bar"></div>
        			</div>
        			<div class="input-container">
    					<input type="password" name="pass" required>
    					<label for="#{label}">Password</label>
        				<div class="bar"></div>
        			</div>
	<input type="hidden" name="date" value='.$date.'>  
	<input type="hidden" name="name" value='.$name.'> 
	<input type="hidden" name="loc1" value='.$loc1.'>  
	<input type="hidden" name="loc2" value='.$loc2.'> 
	<input type="hidden" name="email" value='.$email.'>

	<div class="input-container">
	<div class="button-container">
	<button><span><input type="submit" name="go" value="Go"></span></button>
	</div>
	</div>
	</div>
	</div>';

	$reasons1 = array("password" => "Wrong Code or Password", "blank" => "You have left one or more fields blank."); 
	if (isset($_GET["loginFailed"]))
	{
	echo '<br>';
	echo $reasons1[$_GET["reason"]];
	} 

echo '
	</strong>
</form>
</center>

<hr>
';

}

?>
