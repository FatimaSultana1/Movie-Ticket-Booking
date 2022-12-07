<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Ticket Booking</title>
    <link rel="stylesheet" href="../css/showtimes.css">
    <link rel="icon" type="jpg/png" href="../images/favicon.png">
</head>
<body>
    <?php
        // Connect to MySQL Database
        $servername = "localhost";
        $username = "root";
        $sql_password = "N1kh1l@mysql";
        $db = "MTB";
        $conn = mysqli_connect($servername, $username, $sql_password, $db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Get movieID residing in newfile.txt
        function get_movie_id() {
            $file = fopen("newfile.txt", "r");
            $movieID = fgets($file);
            return $movieID;
        }

        $movieID = get_movie_id();

        function get_movie_name($movieID) {
            global $conn;
            $sql = "SELECT title FROM movie WHERE movieID=$movieID";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            return $row['title'];
        }

        // Get theatre_names
        $sql = "SELECT * FROM theatre;";
        $result = mysqli_query($conn, $sql);
        $array = array();
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($array, $row);
        }

        // A function to get list of show times based on theatreID
        function get_shows_times($theatreID) {
            global $conn;
            $sql = "SELECT TIME_FORMAT(startTime, \"%h:%i %p\") AS startTime FROM shows INNER JOIN theatre ON shows.theatreID=theatre.theatreID WHERE theatre.theatreID=$theatreID;";
            $result = mysqli_query($conn, $sql);
            $times_array = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($times_array, $row);
            }
            return $times_array;
        }
        $times_array = get_shows_times($array[0]['theatreID']);

        // Get movie rating
        $movie = get_movie_name($movieID);
        $sql = "SELECT rating FROM movie WHERE movieID=$movieID;";
        $result = mysqli_query($conn, $sql);
        $rating = mysqli_fetch_assoc($result)['rating'];
    ?>
    <!-- <div class="navbar"> -->
            <!-- <ul>
                <li style="color:white"><a href="#">07 JUN</a></li>
                <li><a href="#">08 JUN</a></li>
                <li><a href="#">09 JUN</a></li>
                <li><a href="#">10 JUN</a></li>
                <li><a href="#">11 JUN</a></li>
                <li><a href="#">12 JUN</a></li>
            </ul> -->
        <!-- </div> -->
    <!-- </div> -->
    <div class="RRRheader">
        <div class="container">
            <h1>
                <?php echo get_movie_name($movieID)?>
            </h1>
            <nobr>
            <h3>Rating: <i><?php echo $rating;?>%<span class="likes">♥</span></i></h3>
        </div>
    </div>
    <div class="container">
        <div class="rrr">
            <img src="../images/<?php echo get_movie_name($movieID)?>.jpg" alt="<?php echo $movie;?>">
        </div>
        <br>
        <p><?php echo $array[0]['name']?></p>
        <form action="times_and_theatre.php" method="post">
            <button class="btn" name="button1" value="1"><?php echo get_shows_times($array[0]['theatreID'])[0]['startTime'];?></button>
            <button class="btn" name="button2" value="2"><?php echo get_shows_times($array[0]['theatreID'])[1]['startTime'];?></button>
            <button class="btn" name="button3" value="3"><?php echo get_shows_times($array[0]['theatreID'])[2]['startTime'];?></button>
            <button class="btn" name="button4" value="4"><?php echo get_shows_times($array[0]['theatreID'])[3]['startTime'];?></button>
            <button class="btn" name="button5" value="5"><?php echo get_shows_times($array[0]['theatreID'])[4]['startTime'];?></button>
        </form>

        <p><?php echo $array[1]['name']?></p>
        <form action="times_and_theatre.php" method="post">
            <button class="btn" name="button6" value="6"><?php echo get_shows_times($array[1]['theatreID'])[0]['startTime'];?></button>
            <button class="btn" name="button7" value="7"><?php echo get_shows_times($array[1]['theatreID'])[1]['startTime'];?></button>
            <button class="btn" name="button8" value="8"><?php echo get_shows_times($array[1]['theatreID'])[2]['startTime'];?></button>
            <button class="btn" name="button9" value="9"><?php echo get_shows_times($array[1]['theatreID'])[3]['startTime'];?></button>
        </form>

        <p><?php echo $array[2]['name']?></p>
        <form action="times_and_theatre.php" method="post">
            <button class="btn" name="button10" value="10"><?php echo get_shows_times($array[2]['theatreID'])[0]['startTime'];?></button>
            <button class="btn" name="button11" value="11"><?php echo get_shows_times($array[2]['theatreID'])[1]['startTime'];?></button>
            <button class="btn" name="button12" value="12"><?php echo get_shows_times($array[2]['theatreID'])[2]['startTime'];?></button>
            <button class="btn" name="button13" value="13"><?php echo get_shows_times($array[2]['theatreID'])[3]['startTime'];?></button>
            <button class="btn" name="button14" value="14"><?php echo get_shows_times($array[2]['theatreID'])[4]['startTime'];?></button>
        </form>

        <p><?php echo $array[3]['name']?></p>
        <form action="times_and_theatre.php" method="post">
            <button class="btn" name="button15" value="15"><?php echo get_shows_times($array[3]['theatreID'])[0]['startTime'];?></button>
            <button class="btn" name="button16" value="16"><?php echo get_shows_times($array[3]['theatreID'])[1]['startTime'];?></button>
            <button class="btn" name="button17" value="17"><?php echo get_shows_times($array[3]['theatreID'])[2]['startTime'];?></button>
            <button class="btn" name="button18" value="18"><?php echo get_shows_times($array[3]['theatreID'])[3]['startTime'];?></button>
        </form>
        
        <p><?php echo $array[4]['name']?></p>
        <form action="times_and_theatre.php" method="post">
            <button class="btn" name="button19" value="19"><?php echo get_shows_times($array[4]['theatreID'])[0]['startTime'];?></button>
            <button class="btn" name="button20" value="20"><?php echo get_shows_times($array[4]['theatreID'])[1]['startTime'];?></button>
            <button class="btn" name="button21" value="21"><?php echo get_shows_times($array[4]['theatreID'])[2]['startTime'];?></button>
            <button class="btn" name="button22" value="22"><?php echo get_shows_times($array[4]['theatreID'])[3]['startTime'];?></button>
            <button class="btn" name="button23" value="23"><?php echo get_shows_times($array[4]['theatreID'])[4]['startTime'];?></button>
        </form>
        <br>
    </div>
</body>
</html>
