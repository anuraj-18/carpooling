<?php

echo '<html>
<font face="tahoma">
<title>|Results|</title>
<h1><strong>TheCarPoolers</strong></h1>
	<hr />
<h2>Results for your time and date:</h2>
<hr />';

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


	$sql="INSERT INTO users (id,name,loc1,loc2,date,email) VALUES('$currid','$name','$loc1','$loc2','$date','$email')";
    $ins=mysqli_query($conn,$sql);

	$get_res="SELECT * FROM check_prev WHERE c_id='$currid' AND password='$pass'; ";
	$get_res_imp=mysqli_query($conn,$get_res);
	$count=mysqli_num_rows($get_res_imp);

	
	if($count==1)
	{	

	$all_sql="SELECT id,name,loc1,loc2,date,email FROM users WHERE loc1='$loc1' AND date BETWEEN '$date' - INTERVAL 30 MINUTE AND '$date' + INTERVAL 30 MINUTE AND email != '$email';";
	$all_sql_imp=mysqli_query($conn,$all_sql);
	$count_res=mysqli_num_rows($all_sql_imp);

	if($count_res==0)
	{
		echo '<br>';
		echo "No matches for your date and time as of now. Try again later.";
		echo '<br>';
	}
	while($row = $all_sql_imp->fetch_assoc())
	{
		$s = $row["date"];
		$dt = new DateTime($s);
	
		$date1 = $dt->format('m/d/Y');
		$time = $dt->format('H:i:s');

		echo "Name:".$row["name"]."<br>";
		$originalDate = $date1;                
		$newDate = date("d-m-Y", strtotime($originalDate));
		echo "Date:".$newDate.'<br>'."Time:".$time;
		$id_of_res=$row["id"];
		$mailtosend=$row["email"];
		echo '<html>
		<br>
		<form method="post" action="send.php">
		<input type="hidden" name="id_get" value='.$id_of_res.'>
		<input type="hidden" name="email" value='.$email.'>
		<input type="hidden" name="name" value='.$name.'>
		<input type="submit" name="send" value="Share">
		
		</form>

		<br>
		</html>';
	}

	}
	else{
		echo '
		<body onload=\'document.forms["form1"].submit()\'>
		<form name="form1" method="post" action="checkcode.php">
		<input type="hidden" name="name" value='.$name.'>
		<input type="hidden" name="loc1" value='.$loc1.'>
		<input type="hidden" name="loc2" value='.$loc2.'>
		<input type="hidden" name="date" value='.$date.'>
		<input type="hidden" name="email" value='.$email.'>
		<input type="submit" value="Go Back" name="find">
		</body>
	';
	}
}


if(isset($_POST['search']))
{
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
    	die(header("location: login.php?loginFailed=true&reason=doesntExist"));
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

    
    
	$all_sql="SELECT id,name,loc1,loc2,date,email FROM users WHERE loc1='$loc1' AND date BETWEEN '$date' - INTERVAL 60 MINUTE AND '$date' + INTERVAL 60 MINUTE AND email != '$email';";
	$all_sql_imp=mysqli_query($conn,$all_sql);
	$count_res=mysqli_num_rows($all_sql_imp);

	if($count_res==0)
	{
		echo '<br>';
		echo "No matches for your date and time as of now. Try again later.";
		echo '<br>';
	}


	while($row = $all_sql_imp->fetch_assoc())
	{
		$s = $row["date"];
		$dt = new DateTime($s);
	
		$date1 = $dt->format('m/d/Y');
		$time = $dt->format('H:i:s');

		echo "Name:".$row["name"]."<br>";
		$originalDate = $date1;                
		$newDate = date("d-m-Y", strtotime($originalDate));
		echo "Date:".$newDate.'<br>'."Time:".$time;
		$id_of_res=$row["id"];
		
		echo '<html>
		<br>
		<form method="post" action="sendother.php">
		<input type="hidden" name="id_get" value='.$id_of_res.'>
		<input type="hidden" name="email" value='.$email.'>
		<input type="hidden" name="name" value='.$name.'>
		<input type="hidden" name="name" value='.$id.'>
		<input type="submit" name="send" value="Share">
		
		</form>

		<br>
		</html>';
	}
	}
	else{
		die(header("location:login.php?loginFailed=true&reason=password"));

	}
    

}