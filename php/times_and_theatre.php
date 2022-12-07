<?php
    $showID = "\n";
    $lines = file('newfile.txt'); 
    $last = sizeof($lines) - 1;
    // echo $last;
    if ($last != 0) {
        $showID = "";
        unset($lines[$last]); 
    }
    // write the new data to the file 
    $fp = fopen('newfile.txt', 'w'); 
    fwrite($fp, implode('', $lines)); 
    fclose($fp); 
    $myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
    // $showID = "";
    if (isset($_POST['button1'])) {
        $showID .= $_POST['button1'];
    } else if (isset($_POST['button2'])) {
        $showID .= $_POST['button2'];
    } else if (isset($_POST['button3'])) {
        $showID .= $_POST['button3'];
    } else if (isset($_POST['button4'])) {
        $showID .= $_POST['button4'];
    } else if (isset($_POST['button5'])) {
        $showID .= $_POST['button5'];
    } else if (isset($_POST['button6'])) {
        $showID .= $_POST['button6'];
    } else if (isset($_POST['button7'])) {
        $showID .= $_POST['button7'];
    } else if (isset($_POST['button8'])) {
        $showID .= $_POST['button8'];
    } else if (isset($_POST['button9'])) {
        $showID .= $_POST['button9'];
    } else if (isset($_POST['button10'])) {
        $showID .= $_POST['button10'];
    } else if (isset($_POST['button11'])) {
        $showID .= $_POST['button11'];
    } else if (isset($_POST['button12'])) {
        $showID .= $_POST['button12'];
    } else if (isset($_POST['button13'])) {
        $showID .= $_POST['button13'];
    } else if (isset($_POST['button14'])) {
        $showID .= $_POST['button14'];
    } else if (isset($_POST['button15'])) {
        $showID .= $_POST['button15'];
    } else if (isset($_POST['button16'])) {
        $showID .= $_POST['button16'];
    } else if (isset($_POST['button17'])) {
        $showID .= $_POST['button17'];
    } else if (isset($_POST['button18'])) {
        $showID .= $_POST['button18'];
    } else if (isset($_POST['button19'])) {
        $showID .= $_POST['button19'];
    } else if (isset($_POST['button20'])) {
        $showID .= $_POST['button20'];
    } else if (isset($_POST['button21'])) {
        $showID .= $_POST['button21'];
    } else if (isset($_POST['button22'])) {
        $showID .= $_POST['button22'];
    } else {
        $showID .= $_POST['button23'];
    }
    fwrite($myfile, $showID);

    header("location:../php/seat_layout.php");
?>