<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat Login Form 3.0</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Login Form</h1>
<!-- Form Module-->
<div class="module form-module">
 
  <div class="form">
   
  </div>
  <div class="form">
    <h2>Enter Your Email Address</h2>
    <form method="post">
      
      <input type="text" placeholder="Email Address" name="un"/>
      <input type="submit" value="Next" name="sub">
    </form>

</div>
<?php
include_once "conbps.php"; 
//$sql = "SELECT * FROM adminn";
//$result = $con->query($sql);



if(isset($_POST['sub']) && !empty($_POST['un']))
{

$email=$_POST['un'];
	//$username = mysqli_real_escape_string($connection, $_POST['un']);
	$sql = "SELECT aemail,apassword FROM adminn WHERE aemail = '$email'";
	$result=$con->query($sql);
	$row=$result->fetch_assoc();
	
echo	$count = $result->num_rows;
	if($count == 1){
		
		
		$r=$result->fetch_assoc();
		$pas=$r['apassword'];
		
	
$to = $row['aemail'];
$subject = "My subject";
$txt = "your password is ".$row['apassword']." <br> if u want to change your password please click here";
$headers = "From: bps.com" . "\r\n" .
"CC: ".$row['aemail'];

mail($to,$subject,$txt,$headers);

	}else{
		echo "User name does not exist in database";
	}


		
		
	 }
	
	
	
	
	
?>

</body>
</html>
