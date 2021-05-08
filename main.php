<?php
   session_start();
   if(isset($_SESSION['email']) == false){
      header('location:index1.php');
   }
?>
<?php
   include("nav.php");
?>

<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style/main_style.css">
   <title> Carpool </title>
</head>
<body>

   <section class="background firstsection">
      <div class="box-main">
         <div class="firsthalf">
         <div class="welcome">
            Welcome
         </div>
            <p class="text-big">The future of Carpooling.</p>
            <p class="text-small">Carpooling (also car-sharing, ride-sharing and lift-sharing) is the sharing of car journeys so that more than one person travels in a car, and prevents the need for others to have to drive to a location themselves.</p>
         </div>

         <div class="secondhalf">
            
         </div>
      </div>
   </section>

   <section class="section" id="benefits">
     <div class="paras">
      <p class="sectiontag text-big">Save money</p>
      <p class="sectionsubtag text-small">Carpooling allows you to share the cost of gas and parking, cutting your expenses by nearly 50% or more; the more occupants in your carpool the more you save.  Carpooling is also socially economical.  Not only will you be saving, but you will also help reduce the costs we all pay towards the construction of new roads, road maintenance and air pollution related health costs.
      </p>
     </div> 
      <div class="thumbnail">
         <img src="img/img1.jpg" alt="img" class="imgfluid">
      </div>
   </section>

   <section class="section left">
     <div class="paras">
      <p class="sectiontag text-big">Better for the environment</p>
      <p class="sectionsubtag text-small">Having fewer cars on the road means reduced Greenhouse Gas (GHG) emissions and improved air quality.
      </p>
     </div> 
      <div class="thumbnail">
         <img src="img/img2.jpg" alt="img" class="imgfluid">
      </div>
   </section>

   <section class="section">
     <div class="paras">
      <p class="sectiontag text-big">Carpooling is convenient</p>
      <p class="sectionsubtag text-small">Carpooling provides commuting convenience comparable to driving alone, with less stress and with the added bonus of companionship while you’re commuting.  Carpooling partners establish their own unique rules that best meet the needs of their carpool.
      </p>
     </div> 
      <div class="thumbnail">
         <img src="img/img3.jpg" alt="img" class="imgfluid">
      </div>
   </section>
   
   <?php include("contact.php"); ?>

</body>
</html>