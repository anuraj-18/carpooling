<?php

$servername="localhost";
$username="root";
$password="";
$database="res";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn) {
	die("Unable to connect");
}

if(isset($_POST['go']))
{
	$name=$_POST["name"];
	$date=$_POST["date"];
	$currid=$_POST['cid'];
	$pass=$_POST['pass'];
	$loc1=$_POST["loc1"];
	$loc2=$_POST["loc2"];
	$email=$_POST["email"];

	$get_res="SELECT * FROM check_prev WHERE c_id='$currid' AND password='$pass'; ";
	$get_res_imp=mysqli_query($conn,$get_res);
	$count=mysqli_num_rows($get_res_imp);

	
	if($count==1)
	{	
    echo '
    <html>
    <head>
	    <title>|Results|</title>
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <link rel="stylesheet" href="design.css">
    </head>
    <body>
        <font face="tahoma">
        <div class="card1"><center><h1 class="title"><strong>TheCarPoolers</strong></h1></center></div>
    <hr />
        <h2>Results for your time and date:</h2>
    <hr />';
    $sql="INSERT INTO users (id,name,loc1,loc2,date,email) VALUES('$currid','$name','$loc1','$loc2','$date','$email')";
    $ins=mysqli_query($conn,$sql);
	$all_sql="SELECT id,name,loc1,loc2,date,email FROM users WHERE date BETWEEN '$date' - INTERVAL 30 MINUTE AND '$date' + INTERVAL 30 MINUTE AND email != '$email' AND loc1='$loc1';";
	$all_sql_imp=mysqli_query($conn,$all_sql);
	$count_res=mysqli_num_rows($all_sql_imp);

	if($count_res==0)
	{
		echo '<br>';
		echo "<p>No matches for your date and time as of now. Try again later.</p>";
		echo '<button onclick="Javascript:window.location.href=\'login.php\' ">Go Back</button>';
		echo '<br>';
	}
	while($row = $all_sql_imp->fetch_assoc())
	{
		echo '<div class="card">';
		$s = $row["date"];
		$dt = new DateTime($s);
		$location1=$row["loc1"];
		$location2=$row["loc2"];
		$date1 = $dt->format('d/m/Y');
		$time = $dt->format('H:i:s');
		echo '<h1 class="title">Name: '.$row["name"]."<br>";
		$originalDate = $date1;                
		$newDate = date("d-m-Y", strtotime($originalDate));
		echo "Date: ".$newDate."<br>";
		echo "Travelling from: ".$location1." to ".$location2."<br>";
		echo "Time: ".$time."</h1>";
		$id_of_res=$row["id"];
		$mailtosend=$row["email"];
		echo '
		<div class="input-container">
		<form method="post" action="send.php">
		<input type="hidden" name="id_get" value='.$id_of_res.'>
		<input type="hidden" name="email" value='.$email.'>
		<input type="hidden" name="name" value='.$name.'>
		<div class="button-container">
		<button><span><input type="submit" name="send" value="Share"><span></button>
		</div>
		</form>
		</div>
		</div>
		<br>
		';
	}
	

	}
	else{
            //echo "<script type='text/javascript'>window.location.href = 'checkcode.php?loginFailed=true&reason=password';</script>";
            //exit();
            
            echo '
                <html>
                <head>
	                <title>|Wrong Credentials|</title>
	                <meta name="viewport" content="width=device-width,initial-scale=1">
	                <link rel="stylesheet" href="design.css">
                </head>
            <body>
                <font face="tahoma">
                <div class="card1"><center><h1 class="title"><strong>TheCarPoolers</strong></h1></center></div>
                <hr />
                <h2>Wrong Password or Username.</h2>
                <form action="checkcode.php" method="POST">
                    <input type="hidden" name="name" value='.$name.'>
	    	        <input type="hidden" name="email" value='.$email.'>
		            <input type="hidden" name="loc1" value='.$loc1.'>
		            <input type="hidden" name="loc2" value='.$loc2.'>
		            <input type="hidden" name="date" value='.$date.'>
                    <input type="submit" name="refind" value="Go Back">
                </form>
                <hr />    
                ';
                
	}
}


if(isset($_POST['search']))
{
    echo '
    <html>
    <head>
	    <title>|Results|</title>
	    <meta name="viewport" content="width=device-width,initial-scale=1">
	    <link rel="stylesheet" href="design.css">
    </head>
    <body>
        <font face="tahoma">
        <div class="card1"><center><h1 class="title"><strong>TheCarPoolers</strong></h1></center></div>
    <hr />
        <h2>Results for your time and date:</h2>
    <hr />';
	$currid=$_POST['cid'];
	$pass=$_POST['pass'];
	$get_res="SELECT * FROM check_prev WHERE c_id='$currid' AND password='$pass'; ";
	$get_res_imp=mysqli_query($conn,$get_res);
	$count=mysqli_num_rows($get_res_imp);
	if($count==1)
	{
	
	$idget_sql="SELECT * from users where id='$currid';";
    $idget_sql_imp=mysqli_query($conn,$idget_sql);
    $get_count_of_imp=mysqli_num_rows($idget_sql_imp);
    if($get_count_of_imp==0)
    {
                echo "<script type='text/javascript'>window.location.href = 'login.php?loginFailed=true&reason=doesntExist';</script>";
                exit();

    }
    while($row1=$idget_sql_imp->fetch_assoc())
    {
    	$id=$row1["id"];
    	$name=$row1['name'];
		$loc1=$row1['loc1'];
		$loc2=$row1['loc2'];
		$date=$row1['date'];
		$email=$row1['email'];
    }

    
    
	$all_sql="SELECT id,name,loc1,loc2,date,email FROM users WHERE loc1='$loc1' AND date BETWEEN '$date' - INTERVAL 30 MINUTE AND '$date' + INTERVAL 30 MINUTE AND email != '$email' AND loc1='$loc1';";
	$all_sql_imp=mysqli_query($conn,$all_sql);
	$count_res=mysqli_num_rows($all_sql_imp);

	if($count_res==0)
	{
		echo '<br>';
		echo '<p>No matches for your date and time as of now. Try again later.</p>';
		echo '<br>';
	}


	while($row = $all_sql_imp->fetch_assoc())
	{
		echo '<div class="card">';
		$s = $row["date"];
		$dt = new DateTime($s);
		$location1=$row["loc1"];
		$location2=$row["loc2"];
		$date1 = $dt->format('d/m/Y');
		$time = $dt->format('H:i:s');
		echo '<h1 class="title">Name: '.$row["name"]."<br>";
		$originalDate = $date1;                
		$newDate = date("d-m-Y", strtotime($originalDate));
		echo "Date: ".$newDate."<br>";
		echo "Travelling from: ".$location1." to ".$location2."<br>";
		echo "Time: ".$time."</h1>";
		$id_of_res=$row["id"];
		$mailtosend=$row["email"];
		
		echo '
		<br>
		<div class="input-container">
		<form method="post" action="sendother.php">
		<input type="hidden" name="id_get" value='.$id_of_res.'>
		<input type="hidden" name="email" value='.$email.'>
		<input type="hidden" name="name" value='.$name.'>
		<input type="hidden" name="name" value='.$id.'>
		<div class="button-container">
		<button><span><input type="submit" name="send" value="Share"><span></button>
		</div>
		
		</form>
		</div>
		</div>
		<br>
		';
		
	}
	echo '<div class="input-container">';
	echo '<div class="button-container">';
	echo '<button onclick="Javascript: window.location.href=\'login.php\';"><span>Go Back</span></button>';
	echo '</div>';
	echo '</div>';
	echo '</body>';
	echo '</html>';

	}
	else{
            echo "<script type='text/javascript'>window.location.href = 'login.php?loginFailed=true&reason=password';</script>";
            exit();
	}
    

}
?>