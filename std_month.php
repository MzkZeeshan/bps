  <!-- start -->
  <div class="row">
   <div class="col-md-12 ">
   <h1> Student of The Month OF <?php echo date('F',time())?></h1>
   </div>
 
  </div>
<div class="row">
  <!-- normal -->

  <div class="col-md-4 col-xs-12">
 
  <?php
  $h =fopen('pre_primary.txt','r');
  $r=fread($h,filesize('pre_primary.txt'));
  $result=explode(",",$r);

  ?>
    <div class="ih-item square effect4"><a href="">
        <div class="img"><img src="<?php echo $result[3] ?>" alt="img"></div>
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="info">
          <small><h3>Pre-primary Student</h3></small>
          <p>Name "<b><?php echo $result[0];?></b>" <br />
 Class <?php echo $result[1];?>  <br />
Reason <?php echo $result[2];fclose($h);?> </p>
          <br />

        </div></a></div>
   
 
  </div>
 <!-- end normal -->
 
   <!-- normal -->
  <div class="col-md-4 col-xs-12">
 
    <?php
  $h =fopen('primary.txt','r');
  $r=fread($h,filesize('primary.txt'));
  $result=explode(",",$r);

  ?>
    <div class="ih-item square effect4"><a href="">
        <div class="img"><img src="<?php echo $result[3] ?>" alt="img"></div>
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="info">
          <h3>Primary Student</h3>
           <p>Name "<b><?php echo $result[0];?></b>" <br />
 Class <?php echo $result[1];?>  <br />
Reason <?php echo $result[2];fclose($h);?> </p>
        </div></a></div>
   
 
  </div>
 <!-- end normal -->
 
 

   <!-- normal -->
  <div class="col-md-4 col-xs-12">
    <?php
  $h =fopen('secondary.txt','r');
  $r=fread($h,filesize('secondary.txt'));
  $result=explode(",",$r);

  ?>
    <div class="ih-item square effect4"><a href="">
        <div class="img"><img src="<?php echo $result[3] ?>" alt="img"></div>
   
        <div class="mask1"></div>
        <div class="mask2"></div>
        <div class="info">
          <h3>Secondary student</h3>
               <p>Name "<b><?php echo $result[0];?></b>" <br />
 Class <?php echo $result[1];?>  <br />
Reason <?php echo $result[2];fclose($h);?> </p>
        </div></a></div>
   
 
  </div>
 <!-- end normal -->
 
 

</div>
 <!-- end -->
 <div class="row">
   <div class="col-md-8">
   </div>
     <div class="col-md-4">
 <!-- <center style="vertical-align:middle; padding:20px 0px 0px 100px;" > <button type="button" class="btn btn-default btn-lg">View All</button></center>-->
     </div>
     </div>
 