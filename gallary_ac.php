<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bilal Public School</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css.css"  >

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"  >

<link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css"  >
<link rel="stylesheet" href="bootstrap-3.3.7-dist/ihover.min.css"  >
<!-- References: https://github.com/fancyapps/fancyBox -->

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery-3.1.1.min.js"></script>

</head>
<style>
.myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
</style>
<body>



<div class="container">
<?php
include "nav.php";
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	
	
}
else
{
	die(" Something rong here");
}

?>

<?php 
    // integer starts at 0 before counting
    $i = 0; 
    $dir = 'event/14_aug';
    if ($handle = opendir($dir)) {
        while (($file = readdir($handle)) !== false){
            if (!in_array($file, array('.', '..')) && !is_dir($dir.$file)) 
                $i++;
        }
    }
    // prints out how many were in the directory
   // echo "There were $i files";
?>


	<div class="row">
    <div class="col-lg-12">
                <h1 class="page-header">Gallery</h1>
            </div>
<?php  $re =1; while($re <= $i) { 
?>
 <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                   <img id="<?php echo $re;?>" class="img-responsive" src="<?php echo "event/".$id."/".$re.".jpg";?>"  onMouseUp="reply_click(this.id)" alt="Independence Day" style="width:300px; height:200px;" width="300" height="200">
                   
                </a>
            </div>
<?php //echo $id."/".$re.".jpg";?>
<?php $re++;}  ?>
<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<script>
// Get the modal
function reply_click(clicked_id)
{var img = document.getElementById(clicked_id);
    //alert(clicked_id);

var modal = document.getElementById('myModal');


// Get the image and insert it inside the modal - use its "alt" text as a caption
//
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}}
</script>

</div> <!-- container / end -->

<br>
<br>

<?php
include "footer.php";
?>
</div>

</body>
</html>