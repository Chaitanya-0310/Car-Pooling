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
   <title> About Us </title>
</head>
<body>
   <div class="about">
   <section class="section" id="benefits">
     <div class="paras">
      <p class="sectiontag text-big">Chaitanya Panchal</p>
      <p class="sectionsubtag text-small">Age : 19</br> Gender : Male </br> E-mail : chaitanyapp03@gmail.com
      </p>
     </div> 
      <div class="thumbnail1">
        <img src="img/chaitanya.jpg" alt="img" class="imgfluid">
      </div>
   </section>

   <section class="section left">
     <div class="paras">
      <p class="sectiontag text-big">Yash Modi</p>
      <p class="sectionsubtag text-small">Age : 20</br> Gender : Male </br> E-mail : yashmodi2403@gmail.com
      </p>
     </div> 
      <div class="thumbnail1">
        <img src="img/yash.jpg" alt="img" class="imgfluid">
      </div>
   </section>

   <section class="section">
     <div class="paras">
      <p class="sectiontag text-big">Mihir Modi</p>
      <p class="sectionsubtag text-small">Age : 21</br> Gender : Male </br> E-mail : mihirmodi1021@gmail.com
      </p>
     </div> 
      <div class="thumbnail1">
        <img src="img/mihir.jpg" alt="img" class="imgfluid">
      </div>
   </section>
   </div>
   
   <?php include("contact.php"); ?>

</body>
</html>