<html>
<head>
    <meta  charset="UTF-8">
    <title>Detail</title>
    <link rel="stylesheet" type="text/css" href="style/offeraride.css">
    
</head>
<body>
    <?php include('nav.php'); ?>
    <div class="text-b">Personal Info</div>
    <form action="pdetails.php" method="post">
    <div class="form-group">
        <label>Name: </label>
        <input type="text" name="name" id="name" value="" class="box" placeholder="Your Name" required >
    </div>
    <div class="form-group">
        <label>Gender: </label>
        <input type="radio" name="gender" id = "Male" value="M"  checked required> Male
        <input type="radio" name="gender" id ="Female" value="F" required > Female
    </div>
    <div class="form-group">
        <label>Mobile No.: </label>
        <input type="number" name="num" id="num" value="" class="box" placeholder="Your Number" required >
    </div>
    <div class="form-group">
        <label>E-mail: </label>
        <input type="text" name="mail" id="mail" value="" class="box" placeholder="Your E-mail" required >
    </div>
    <div class="form-group">
        <label>Address: </label>
        <textarea class="box" id="address" name="address" cols="20" rows="3" placeholder="Your Address"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="box btn">Submit</button>
    </div> 
    </form>
    <?php include('contact.php'); ?>
</body>
</html>