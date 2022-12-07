<?php    
    $email = $_POST["email"];
    $password = $_POST["password"];
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
    $sql = "SELECT * FROM user WHERE email = \"{$email}\" AND password = \"{$password}\";";
    // $sql = "SELECT * FROM user;";

    $result = mysqli_query($conn, $sql);
    // $row = mysqli_fetch_array($result);
    // $array = new array();
    // while ($row=mysqli_fetch_array($result)) {
    //     printf("ID: %s, Name: %s, Email: %s, Password: %s, PhoneNumber: %s<br>", $row[0], $row[1], $row[2], $row[3], $row[4]);
    // }        
    // printf ("ID: %s, Name: %s, Email: %s, Password: %s, PhoneNumber: %s\n", $row[0], $row[1], $row[2], $row[3], $row[4]);

    
    if (mysqli_num_rows($result) == 0) {
        // row not found, do stuff...
        echo "Wrong Credentials!!!";
   } else {
       // do other stuff...
       header("location:../php/home.php");
   }
    mysqli_close($conn);
?>