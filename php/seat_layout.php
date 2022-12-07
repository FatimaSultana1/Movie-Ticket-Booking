<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Movie Ticket Booking</title>
        <link rel="stylesheet" href="../css/seat_layout.css">
        <link rel="icon" type="jpg/png" href="../images/favicon.png">
    </head>
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $sql_password = "N1kh1l@mysql";
            $db = "MTB";
            $conn = mysqli_connect($servername, $username, $sql_password, $db);
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            function get_show_id() {
                $file = fopen("newfile.txt", "r");
                $movieID = (int)fgets($file);
                $button_number = (int)fgets($file);
                return ($movieID - 1) * 23  + $button_number;
            }

            $showID = get_show_id();
            
            $sql = "SELECT seatID FROM show_seat WHERE showID=$showID;";
            $result = mysqli_query($conn, $sql);
            $array = array();
            while ($row = mysqli_fetch_assoc($result)) {
                array_push($array, $row['seatID']);
            } 

            // $seatID = 1;
            function check_booked($seatID) {
                global $array;
                if (in_array($seatID, $array)) {
                    return "seat occupied";
                } else {
                    return "seat";
                }
            }

        ?>
        <ul class="showcase">
            <li>
                <div id="avail" class="seat"></div>
                <small>Available</small>
            </li>
            <li>
                <div class="seat selected"></div>
                <small>Selected</small>
            </li>
            <li>
                <div class="seat occupied"></div>
                <small>Occupied</small>
            </li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="row_">A</div>
                <div class="<?php echo check_booked(1)?>">1</div>
                <div class="<?php echo check_booked(2)?>">2</div>
                <div class="<?php echo check_booked(3)?>">3</div>
                <div class="<?php echo check_booked(4)?>">4</div>
                <div class="<?php echo check_booked(5)?>">5</div>
                <div class="<?php echo check_booked(6)?>">6</div>
                <div class="<?php echo check_booked(7)?>">7</div>
                <div class="<?php echo check_booked(8)?>">8</div>
                <div class="<?php echo check_booked(9)?>">9</div>
                <div class="<?php echo check_booked(10)?>">10</div>
                <div class="<?php echo check_booked(11)?>">11</div>
                <div class="<?php echo check_booked(12)?>">12</div>
            </div>
            <div class="row">
                <div class="row_">B</div>
                <div class="<?php echo check_booked(13)?>">1</div>
                <div class="<?php echo check_booked(14)?>">2</div>
                <div class="<?php echo check_booked(15)?>">3</div>
                <div class="<?php echo check_booked(16)?>">4</div>
                <div class="<?php echo check_booked(17)?>">5</div>
                <div class="<?php echo check_booked(18)?>">6</div>
                <div class="<?php echo check_booked(19)?>">7</div>
                <div class="<?php echo check_booked(20)?>">8</div>
                <div class="<?php echo check_booked(21)?>">9</div>
                <div class="<?php echo check_booked(22)?>">10</div>
                <div class="<?php echo check_booked(23)?>">11</div>
                <div class="<?php echo check_booked(24)?>">12</div>

            </div>
            <div class="row">
                <div class="row_">C</div>
                <div class="<?php echo check_booked(25)?>">1</div>
                <div class="<?php echo check_booked(26)?>">2</div>
                <div class="<?php echo check_booked(27)?>">3</div>
                <div class="<?php echo check_booked(28)?>">4</div>
                <div class="<?php echo check_booked(29)?>">5</div>
                <div class="<?php echo check_booked(30)?>">6</div>
                <div class="<?php echo check_booked(31)?>">7</div>
                <div class="<?php echo check_booked(32)?>">8</div>
                <div class="<?php echo check_booked(33)?>">9</div>
                <div class="<?php echo check_booked(34)?>">10</div>
                <div class="<?php echo check_booked(35)?>">11</div>
                <div class="<?php echo check_booked(36)?>">12</div>

            </div>
            <div class="row">
                <div class="row_">D</div>
                <div class="<?php echo check_booked(37)?>">1</div>
                <div class="<?php echo check_booked(38)?>">2</div>
                <div class="<?php echo check_booked(39)?>">3</div>
                <div class="<?php echo check_booked(40)?>">4</div>
                <div class="<?php echo check_booked(41)?>">5</div>
                <div class="<?php echo check_booked(42)?>">6</div>
                <div class="<?php echo check_booked(43)?>">7</div>
                <div class="<?php echo check_booked(44)?>">8</div>
                <div class="<?php echo check_booked(45)?>">9</div>
                <div class="<?php echo check_booked(46)?>">10</div>
                <div class="<?php echo check_booked(47)?>">11</div>
                <div class="<?php echo check_booked(48)?>">12</div>
            </div>
            <div class="row">
                <div class="row_">E</div>
                <div class="<?php echo check_booked(49)?>">1</div>
                <div class="<?php echo check_booked(50)?>">2</div>
                <div class="<?php echo check_booked(51)?>">3</div>
                <div class="<?php echo check_booked(52)?>">4</div>
                <div class="<?php echo check_booked(53)?>">5</div>
                <div class="<?php echo check_booked(54)?>">6</div>
                <div class="<?php echo check_booked(55)?>">7</div>
                <div class="<?php echo check_booked(56)?>">8</div>
                <div class="<?php echo check_booked(57)?>">9</div>
                <div class="<?php echo check_booked(58)?>">10</div>
                <div class="<?php echo check_booked(59)?>">11</div>
                <div class="<?php echo check_booked(60)?>">12</div>
            </div>
            <div class="row row-6">
                <div class="row_">F</div>
                <div class="<?php echo check_booked(61)?>">1</div>
                <div class="<?php echo check_booked(62)?>">2</div>
                <div class="<?php echo check_booked(63)?>">3</div>
                <div class="<?php echo check_booked(64)?>">4</div>
                <div class="<?php echo check_booked(65)?>">5</div>
                <div class="<?php echo check_booked(66)?>">6</div>
                <div class="<?php echo check_booked(67)?>">7</div>
                <div class="<?php echo check_booked(68)?>">8</div>
                <div class="<?php echo check_booked(69)?>">9</div>
                <div class="<?php echo check_booked(70)?>">10</div>
                <div class="<?php echo check_booked(71)?>">11</div>
                <div class="<?php echo check_booked(72)?>">12</div>
            </div>
            <div class="row">
                <div class="row_">G</div>
                <div class="<?php echo check_booked(73)?>">1</div>
                <div class="<?php echo check_booked(74)?>">2</div>
                <div class="<?php echo check_booked(75)?>">3</div>
                <div class="<?php echo check_booked(76)?>">4</div>
                <div class="<?php echo check_booked(77)?>">5</div>
                <div class="<?php echo check_booked(78)?>">6</div>
                <div class="<?php echo check_booked(79)?>">7</div>
                <div class="<?php echo check_booked(80)?>">8</div>
                <div class="<?php echo check_booked(81)?>">9</div>
                <div class="<?php echo check_booked(82)?>">10</div>
                <div class="<?php echo check_booked(83)?>">11</div>
                <div class="<?php echo check_booked(84)?>">12</div>
            </div>
            <div class="row">
                <div class="row_">H</div>
                <div class="<?php echo check_booked(85)?>">1</div>
                <div class="<?php echo check_booked(86)?>">2</div>
                <div class="<?php echo check_booked(87)?>">3</div>
                <div class="<?php echo check_booked(88)?>">4</div>
                <div class="<?php echo check_booked(89)?>">5</div>
                <div class="<?php echo check_booked(90)?>">6</div>
                <div class="<?php echo check_booked(91)?>">7</div>
                <div class="<?php echo check_booked(92)?>">8</div>
                <div class="<?php echo check_booked(93)?>">9</div>
                <div class="<?php echo check_booked(94)?>">10</div>
                <div class="<?php echo check_booked(95)?>">11</div>
                <div class="<?php echo check_booked(96)?>">12</div>
            </div>
            <div class="row">
                <div class="row_">I</div>
                <div class="<?php echo check_booked(97)?>">1</div>
                <div class="<?php echo check_booked(98)?>">2</div>
                <div class="<?php echo check_booked(99)?>">3</div>
                <div class="<?php echo check_booked(100)?>">4</div>
                <div class="<?php echo check_booked(101)?>">5</div>
                <div class="<?php echo check_booked(102)?>">6</div>
                <div class="<?php echo check_booked(103)?>">7</div>
                <div class="<?php echo check_booked(104)?>">8</div>
                <div class="<?php echo check_booked(105)?>">9</div>
                <div class="<?php echo check_booked(106)?>">10</div>
                <div class="<?php echo check_booked(107)?>">11</div>
                <div class="<?php echo check_booked(108)?>">12</div>
            </div>
            <div class="row">
                <div class="row_">J</div>
                <div class="<?php echo check_booked(109)?>">1</div>
                <div class="<?php echo check_booked(110)?>">2</div>
                <div class="<?php echo check_booked(111)?>">3</div>
                <div class="<?php echo check_booked(112)?>">4</div>
                <div class="<?php echo check_booked(113)?>">5</div>
                <div class="<?php echo check_booked(114)?>">6</div>
                <div class="<?php echo check_booked(115)?>">7</div>
                <div class="<?php echo check_booked(116)?>">8</div>
                <div class="<?php echo check_booked(117)?>">9</div>
                <div class="<?php echo check_booked(118)?>">10</div>
                <div class="<?php echo check_booked(119)?>">11</div>
                <div class="<?php echo check_booked(120)?>">12</div>
            </div>
            <div class="screen"></div>
        </div>
        <p class="text">
            You have selected <span id="count">0</span> seats for a price of &#8377; <span id="total">0</span>
        </p>
        <form id='form' name="seat-layout-form" action="seat_selection.php" method="post" hidden>
            <!-- <input id="submit" type="submit" value="Book Tickets"> -->
            <button id="submit" name="submit" value="">Book Tickets</button>
        </form>
        <script src="../js/seat_layout.js"></script>
    </body>
</html>
