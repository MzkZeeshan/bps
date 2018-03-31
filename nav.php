
<?php
 $a= pathinfo($_SERVER['PHP_SELF'],PATHINFO_BASENAME);

?>
<nav class="navbar navbar-default" style="margin-bottom:opx;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style = "text-align:center;" href="Index.php"><B>Bilal Public school</B></a>
    </div>
    <ul class="nav navbar-nav">
      <li
      <?php if($a=="Index.php"){echo $contact="class='active'";}?>  
      ><a href="Index.php"  style = "text-align:center;">Home</a></li>
      <li
      <?php if($a=="gallary.php" || $a=="gallary_ac.php"){echo $contact="class='active'";}?>><a style = "text-align:center;" href="gallary.php">Gallary</a></li>
      <li 
      <?php if($a=="about_us.php"){echo $contact="class='active'";}?>><a style = "text-align:center;" href="about_us.php">About us</a></li>
      <li
      <?php if($a=="contact_us.php"){echo $contact="class='active'";}?>><a style = "text-align:center;" href="contact_us.php">Contact US</a></li>
    </ul>
  </div>
  
</nav>

