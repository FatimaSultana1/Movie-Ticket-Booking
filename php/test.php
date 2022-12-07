<?php
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
    $txt = "";
    if (isset($_POST['button1'])) {
        $first_name = $_POST['button1'];
        // echo $first_name;
        $txt = $first_name;
    } else if (isset($_POST['button2'])) {
        $first_name = $_POST['button2'];
        // echo $first_name;
        $txt = $first_name;
    } else if (isset($_POST['button3'])) {
        $first_name = $_POST['button3'];
        // echo $first_name;
        $txt = $first_name;
    } else {
        $first_name = $_POST['button4'];
        // echo $first_name;
        $txt = $first_name;
    }
    fwrite($myfile, $txt);

    header("location:../php/showtimes.php");
?>