<!doctype html>
<html>
<head>

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"  >

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"  >
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<style>
.error {color: #FF0000;}
</style>
<?php
//include_once "conbps.php"; 
//$sql = "SELECT apassword,auname FROM adminn";

//$result = $con->query($sql);

session_start();
 if(isset($_SESSION['a']))
{
	 $un=$_SESSION['a'];
	$psd=$_SESSION['b'];

		if($un=="zeeshan" && $psd=="123")
		{
			$true="condition is true";
		}
		
	

          
}
if(!isset($true))
{ 
die("<center><h1>something wrong here<br>please Re-Login</h1></center>");

}
$nameErr = $classErr = $reasonErr =  "";
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if(isset($_POST['sub']))
{


	
	
	if(!empty($_POST['std_name']))
	{
	 $name=test_input($_POST['std_name']);
		if(strlen($name)<=30)
		{
			
		}
		else
		{
				$nameErr="your name is soo long please insert short name";
		}
	}
	else
	{
		$nameErr="Name is required";
	}
	
	if(!empty($_POST['std_class']))
	{
		$class=test_input($_POST['std_class']);
		
	}
	else
	{
		$classErr="class is required";
	}

		if(!empty($_POST['reason']))
	{
		$reason=test_input($_POST['reason']);
			if(strlen($reason)<=30)
			{
			
			}
			else
			{
				$reasonErr="your reason is soo long please insert short reason";
			}
	}
	else
	{
		$reasonErr="Reason is required";
	}
	if(!empty($name) && !empty($class) && !empty($reason) && strlen($name)<=30 && strlen($reason)<=30)
	{
	
		$quality=$_POST['std_clas'];
					if($quality==1)
							{
				
		
							if(isset($_FILES['file']['name']))
									{
			 
									if(!empty($_FILES['file']['name']))
										{	
										$filename=$_FILES['file']['name'];
										$tmp=$_FILES['file']['tmp_name'];
										$size=$_FILES['file']['size'];
										$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
											if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg" ) 
												{
					
   												 echo "Sorry, only JPG, JPEG, PNG  are allowed.";
			
		       									 }
		        							else
												{
					     							 if($size<=8388608)
						  								{
					 									echo $newpath="10.".pathinfo($filename,PATHINFO_EXTENSION);
   					 									if(move_uploaded_file($tmp,$newpath))
															 {
																
					 										 $handle =fopen("pre_primary.txt",'w');
															 fwrite($handle,$name.",".$class.",".$reason.",".$newpath);
		              										 echo "Successfull Process";
					 										  }    
					
					 									 else
															 { 
																
																$fileErr="Soomething Rong Here";
															 }		
						  								}
						 							 else
						 							    {
							
					 		
														$fileErr=" upload only 8mb image";	
							
						  								}
														
												}
										}
									  else
										{
											$fileErr= "please choose a Image";
										}
									 }
		
		                        }
		
		if($quality==2)
		{
				
		
				
		
							if(isset($_FILES['file']['name']))
									{
			 
									if(!empty($_FILES['file']['name']))
										{	
										$filename=$_FILES['file']['name'];
										$tmp=$_FILES['file']['tmp_name'];
										$size=$_FILES['file']['size'];
										$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
											if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg" ) 
												{
					
   												 echo "Sorry, only JPG, JPEG, PNG  are allowed.";
			
		       									 }
		        							else
												{
					     							 if($size<=8388608)
						  								{
					 								 $newpath="11.".pathinfo($filename,PATHINFO_EXTENSION);
   					 									if(move_uploaded_file($tmp,$newpath))
															 {	
					 										 $handle =fopen("primary.txt",'w');
															 fwrite($handle,$name.",".$class.",".$reason.",".$newpath);
		              										 echo "Succesfull Process";
					 										  }    
					
					 									 else
															 { 
																
																$fileErr="Soomething Rong Here";
															 }		
						  								}
						 							 else
						 							    {
							
					 		
														$fileErr=" upload only 8mb image";	
							
						  								}
														
												}
										}
									  else
										{
											$fileErr= "please choose a Image";
										}
									 }
		
		}
		if($quality==3)
		{
		 	if(isset($_FILES['file']['name']))
									{
			 
									if(!empty($_FILES['file']['name']))
										{	
										$filename=$_FILES['file']['name'];
										$tmp=$_FILES['file']['tmp_name'];
										$size=$_FILES['file']['size'];
										$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
											if(strtolower($imageFileType) != "jpg" && strtolower($imageFileType) != "png" && strtolower($imageFileType) != "jpeg" ) 
												{
					
   												 echo "Sorry, only JPG, JPEG, PNG  are allowed.";
			
		       									 }
		        							else
												{
					     							 if($size<=8388608)
						  								{
					 									$newpath="12.".pathinfo($filename,PATHINFO_EXTENSION);
   					 									if(move_uploaded_file($tmp,$newpath))
															 {	
					 										 $handle =fopen("secondary.txt",'w');
															 fwrite($handle,$name.",".$class.",".$reason.",".$newpath);
		              										 echo "sucessfull process";
					 										  header('Location: admin.php');
															  }    
					
					 									 else
															 { 
																
																$fileErr="Soomething Rong Here";
															 }		
						  								}
						 							 else
						 							    {
							
					 		
														$fileErr=" upload only 8mb image";	
							
						  								}
														
												}
										}
									  else
										{
											$fileErr= "please choose a Image";
										}
									 }
		
		}
	}


	
}





//print_r($_FILES['file']);
?>
<?php

include "connection.php";
if(isset($_POST['usub']))
{

	if(!empty($_POST['noti']))
	{$noti=$_POST['noti'];
		//if(strlen($noti)<=153)
		//{
$handle =fopen('notification.txt','w');
fwrite($handle,$noti);
		}
		//else
		///{
			//$error= "your notification is so long please use some word";
		//}
	//}
	else
	{
		$error="please fill the field";
	}}
	
	
?>
<body>
<div class="container">
<div class="row">
<div class="col-md-12" style="border:#000 thin inset">
<h1>Update Notification</h1>
<form method="post">
New Notification :
<br>

<textarea type="text"  class="form-control" name="noti" cols="30" rows="5"> </textarea>
<br>
<input type="submit"  class="btn btn-info" name="usub" value="Updated">
</form>
<br>

<?php

if(isset($error)){echo $error;}?>
</div>
</div>



<div class="row">
<div class="col-md-12" style="border:#000 thin inset">

<h1>Student Of the Month updation</h1>
<form method="post"  enctype="multipart/form-data">
Student Quality :<select   class="form-control" name="std_clas">
<option value="1">Pre-primary Student</option>
<option value="2">Primary Student</option>
<option value="3">Secondary Student</option>
</select>
<br>
Student Name :<input  class="form-control" type="text" name="std_name" >  <span class="error"> <?php echo $nameErr;?></span>
<br>
Student Class :<input type="text"  class="form-control" name="std_class"> <span class="error"><?php echo $classErr;?></span>
<br>
Reason :<input type="text"  class="form-control" name="reason"> <span class="error"><?php echo $reasonErr;?></span>
<br>
<label name="file" class="btn btn-default btn-file">Choose Image
<input type="file"    style="display: none;" name="file">
</label><span class="error"><?php if(isset($fileErr)){echo $fileErr;}?></span>

<br>
<br>

<input type="submit"  class="btn btn-info" name="sub" value="Make Student Of the Month">
<br>
<br>

</form>

</div>
</div>

</div>
</body>
</html>
<?php
	


?>