<?php
    if(isset($_POST['submit'])){
        $fname = $_POST['fname'];
        $email_add = $_POST['email_add'];
        $pass_word = $_POST['pass_word'];
        $cpass_word = $_POST['cpass_word'];
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "prototype";

    $con = mysqli_connect($host, $username, $password, $dbname);

    if(!$con){
        die("Connection failed!" . mysqli_connect_error());
    }

    $sql = "INSERT INTO register (fname, email_add, pass_word, cpass_word) VALUES ('$fname', '$email_add', '$pass_word', '$cpass_word')";

    $rs = mysqli_query($con, $sql);
    if($rs){
        echo "Entries added!";
    } else {
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
?>