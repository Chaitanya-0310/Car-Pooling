<html>
<head>
   <title> </title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="style/sidenav.css">
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div>
       <span class="menulines" onclick="opensidenav()">&#9776;</span>
    </div>
    
    <side class="sidenav" id="mysidenav">
       <div class="close">
       <b href="javascript:void(0)" class="closebtn" onclick="closesidenav()">
          &times;
       </b>
       </div>
       <ul>
           <li><a href="main.php">Home</a></li>
           <li><a href="#" class="drv-btn">Driver
               <span class="first">&#9660</span>
           </a></li>
           <ul class="drv-show">
               <li><a href="offeraride.php">Offer A Ride</a></li>
               <li><a href="viewofferedride.php">View Offered Ride</a></li>
           </ul>
           <li><a href="#" class="pas-btn">Passenger
               <span class="second">&#9660</span>
           </a></li>
           <ul class="pas-show">
               <li><a href="displayride.php">Find A Ride</a></li>
               <li><a href="confirmedride.php">View Conformed Ride</a></li>
           </ul>
           <li><a href="#contact">Contact</a></li>
           <li><a href="logout.php">Logout</a></li>
       </ul>
    </side>
    
    <script>
        const opensidenav = () => {
            document.getElementById('mysidenav').style.width ="250px";
        }
        const closesidenav = () => {
            document.getElementById('mysidenav').style.width ="0px";
        }
        
        $(document).ready(function(){
        $('.drv-btn').click(function(){
            $('side ul .drv-show').toggleClass("show");
            $('side ul .first').toggleClass("rotate");
        });
        });
        $(document).ready(function(){
        $('.pas-btn').click(function(){
            $('side ul .pas-show').toggleClass("show1");
            $('side ul .second').toggleClass("rotate");
        });
        });
        $(document).ready(function(){
        $('side ul li').click(function(){
           $(this).addClass("active").siblings().removeClass("active");
        });   
        });
    </script>

</body>
</html>