<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title> 
    <link rel="stylesheet" href="../css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&family=Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/979154e3ae.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>
    <link rel="icon" type="jpg/png" href="../images/favicon.png">
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $sql_password = "N1kh1l@mysql";
        $db = "MTB";
        // Create connection
        $conn = mysqli_connect($servername, $username, $sql_password, $db);
        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "SELECT * FROM movie;";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }
        // print_r($array);
    ?>
    <div class="navbar">
        <div class="container">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Offers</a></li>
                <li><a href="#">Gift Cards</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="show-title">
            <h1>Faneeha Shows</h1>        
        </div>
        <div class="images" id="images">
            <i class="fa-solid fa-circle-chevron-left"></i>
            <div class="image">
                <img src="../images/<?php echo $array[0]['title']?>.jpg" alt="image">
                <div class="about-image">
                    <h4><?php echo $array[0]['title']?></h4>
                    <i class="fa fa-heart"><span class="likes"><?php echo $array[0]['rating']?>%</span></i>
                </div>
                <form action="test.php" method="post">
                    <button class="button" name="button1" value="<?php echo $array[0]['movieID']?>">Book Tickets</button>
                </form>
            </div>
            <div class="image">
                <img src="../images/<?php echo $array[1]['title']?>.jpg" alt="image">
                <div class="about-image">
                    <h4><?php echo $array[1]['title']?></h4>
                    <i class="fa fa-heart"><span class="likes"><?php echo $array[1]['rating']?>%</span></i>
                </div>
                <form action="test.php" method="post">
                    <button class="button" name="button2" value="<?php echo $array[1]['movieID']?>">Book Tickets</button>
                </form>
            </div>
            <div class="image">
                <img src="../images/<?php echo $array[2]['title']?>.jpg" alt="image">
                <div class="about-image">
                    <h4><?php echo $array[2]['title']?></h4>
                    <i class="fa fa-heart"><span class="likes"><?php echo $array[2]['rating']?>%</span></i>
                </div>
                <form action="test.php" method="post">
                    <button class="button" name="button3" value="<?php echo $array[2]['movieID']?>">Book Tickets</button>
                </form>
            
            </div>
            <div class="image">
                <img src="../images/<?php echo $array[3]['title']?>.jpg" alt="image">
                <div class="about-image">
                    <h4><?php echo $array[3]['title']?></h4>
                    <i class="fa fa-heart"><span class="likes"><?php echo $array[3]['rating']?>%</span></i>
                </div>
                <form action="test.php" method="post">
                    <button class="button" name="button4" value="<?php echo $array[3]['movieID']?>">Book Tickets</button>
                </form>
                
            </div>
            <i class="fa-solid fa-circle-chevron-right"></i>  
        </div>
    </div>
</body>
</html>