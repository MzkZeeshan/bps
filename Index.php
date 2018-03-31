<!DOCTYPE html>
<html>
<?php

require_once "connection.php";
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilal Public School</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="files/css.css"  >

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"  >

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"  >
<link rel="stylesheet" href="bootstrap-3.3.7-dist/ihover.min.css"  >

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery-3.1.1.min.js"></script>



</head>

<body>       
       <div class="container">
<?php
 include "nav.php";
?>
<div class="jumbotron">
<h1>Welcome To <br /> <h1>Bilal Public SchooL</h1></h1>
<h2>
R-160 North Karachi
</h2>
</div>
<?php
include "std_month.php";
?>


<!--<img src="image/bps.PNG" class="img-responsive img-rounded"  width="100%"/>-->

 <hr>
<div class="row">
<div class="col-md-8">
<blockquote   ><h3>Notification
<small> <?php 
	$h=fopen('notification.txt','r');
	echo fread($h,filesize('notification.txt'));

 ?></small></h3></blockquote>
 <br>

<h1>Introduction</h1>
<p>The foundations of the present education system were laid by Sir Sultan Mohamed Shah, Aga  Khan III, who established over 200 schools during the 20th century, the first in 1905 in Zanzibar and Balochistan, followed by schools in Dar es Salaam in 1906 and in Mundra, in India, in 1907.
<br />
The Aga Khan Schools strive to create a harmonious balance between academic demands, sporting and cultural activities and community life.
<br />
It challenges its pupils to be intellectually inquisitive and socially conscious. The School believes that while what students know is important, the true measure of a student’s education is the ability to analyse what they do not know.
</p>
<br />
<h1>Sports</h1>
<p>
Physical Education is an integral part of life at AKHSS, Karachi. The school offers a comprehensive programme of intra and inter-school sports activities. The school participates in competitions held at inter-school, board, district and city levels. Qualified physical training instructors (male and female) supervise the trainings and regular sports periods are scheduled during the week.
<br />
AKHSS, Karachi has separate, well-maintained grounds for cricket, football, and hockey, as well as courts for throw ball, volleyball, and basketball. In addition, students are taken to a special Astro Turf ground for hockey practice. The school also provides facility for indoor games such as table tennis, chess and scrabble.
<br />

This year the school’s throwball team has been affiliated with the Pakistan Throwball Federation, and some of its players represented Pakistan in the international championship held in Malaysia.
</p>



</div>

	


 <div class="col-md-4" >
    <div class="thumbnail">
      <img src="image/rashid.jpg" alt="...">
      <div class="caption">
        <h3>Rashid Minhas</h3>
        <p>Sir Speedy has been serving three major biotech and biopharma companies in Cambridge for over 30 years. With a global business platform, we understand how printing and marketing services are crucial to keeping your sales and marketing strategies functioning well, and we are here to help in any way we can. We can assist with anything from business cards, to marketing material, to direct mail projects, to conference support and even graphics work. Sir Speedy can and will help lighten your load <span id="hide"  >, and you can count on us to deliver it quickly, professionally and exactly as you requested and expected.</p>
        
        <a  id="hidee"class="btn btn-primary" role="button">Reed More</a> 
        </span>
        <script>
$(document).ready(function(){
	 $("#hide").hide();
    $("#hidee").click(function(){
        $("#hide").show(400);
		$("#hidee").hide(100);
    });
  
});
</script>
      </div>
  
		</div>
        </div>
</div>


<?php
include "footer.php";
?>


</div>
  
  






</div>
</body>
</html>
