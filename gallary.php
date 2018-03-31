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

<!-- Latest compiled and minified JavaScript -->
<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
<script src="jquery-3.1.1.min.js"></script>

</head>
<style>
a.list-group-item {
    height:auto;
    min-height:220px;
}
a.list-group-item.active small {
    color:#fff;
}
.stars {
    margin:20px auto 1px;    
}
</style>
<body>
<div class="container">
<?php
include "nav.php";
$n1="14_aug";
$n2="award_day";
$n3="circket";
?>

    <div class="row">
		<div class="well">
        <h1 class="text-center">Bilal Public Events</h1>
        <div class="list-group-item">
          <a href="gallary_ac.php?id=<?php echo $n1; ?>" class="list-group-item">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive"  src="image/121.png" alt="placehold.it/350x250" >
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> Independence Day</h4>
                    <p class="list-group-item-text">Independence Day (Urdu: یوم آزادی‎; Yaum-e Āzādī), observed annually on 14 August, following its first observance on that day in 1947 (the day before the partition of India officially took effect), is a national holiday in Pakistan. It commemorates the occasion of Pakistan's creation and was declared a sovereign nation following the partition of India on 15 August 1947.
                    </p>   </div>
                      <div class="col-md-3 text-center">
                    <h2><small>Dated</small><br>14/Aug/2016 </h2>
                    
                
                  
             
                </div>
               
          </a>
          
              <a href="gallary_ac.php?id=<?php echo $n2; ?>" class="list-group-item">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive"  src="image/award.jpg" alt="placehold.it/350x250" >
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> Award Day</h4>
                    <p class="list-group-item-text">An award is something given to a person, a group of people, or an organization to recognize their excellence in a certain field; a certificate of excellence. Awards are often signified by trophies, titles, certificates, commemorative plaques, medals, badges, pins, or ribbons. An award may carry a monetary prize given to the recipient; for example, the Nobel Prize for contributions to society or the Pulitzer Prize for literary achievements. An award may also simply be a public acknowledgment of excellence, without any tangible token or prize of excellence.
                    </p> </div>
                      <div class="col-md-3 text-center">
                <h2><small>Dated</small><br>12/jan/2015 </h2>
                    
                
                  
               
                </div>
               
          </a>
 
          <a href="gallary_ac.php?id=<?php echo $n3; ?>" class="list-group-item">
                <div class="media col-md-3">
                    <figure class="pull-left">
                        <img class="media-object img-rounded img-responsive" src="image/circkit.jpg" alt="placehold.it/350x250">
                    </figure>
                </div>
                <div class="col-md-6">
                    <h4 class="list-group-item-heading"> Cricket Day </h4>
                    <p class="list-group-item-text"> Cricket is a bat-and-ball game played between two teams of eleven players on a cricket field, at the centre of which is a rectangular 22-yard-long pitch with a wicket (a set of three wooden stumps) at each end. One team bats, attempting to score as many runs as possible, whilst their opponents field. Each phase of play is called an innings. After either ten batsmen have been dismissed or a fixed number of overs have been completed, the innings ends and the two teams then swap roles. The winning team is the one that scores the most runs, including any extras gained, during their innings.                         
                    </p>
                </div>
                <div class="col-md-3 text-center">
              <h2><small>Dated</small><br>11/jan/2014 </h2>
                    
                
                  
                </div>
          </a>
        </div>
        </div>
	</div>


<?php
include "footer.php";
?>
</div>
</body>
</html>