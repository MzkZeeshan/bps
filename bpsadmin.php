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
    <h2>Login to your account</h2>
    <form method="post">
      <input type="text" placeholder="Username"/ name="un">
      <input type="password" placeholder="Password" name="ps"/>
      <input type="submit" name="sub">
    </form>
    <a href="forget.php">Forget Your Password</a>

</div>
<?php
//include_once "conbps.php"; 
//$sql = "SELECT * FROM adminn";
//$result = $con->query($sql);



if(isset($_POST['sub']))
{
	$un=$_POST['un'];
	$ps=$_POST['ps'];
	

//	while($row=$result->fetch_assoc())
	// {echo  $row['auname']."ok";
	//	 if( $row['auname']=="adminze")
//{
	//echo "ok";
//}
	if($un=="zeeshan" && $ps=="123")
	    { $m=md5(date("i",time()));
	session_start();
 $_SESSION['a']=$un;
 $_SESSION['b']=$ps;
	
		header("Location: admin.php?$u=$m");
		
	    }
		else
		{
			echo "result Not Found";
		}
	 }
	
	
	
	
	


?>

</body>
</html>
