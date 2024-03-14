<?php

session_start();
//   include('php/config.php');
if (isset($_POST['submit'])) {
    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbname = "tutorial";

    $connection = new mysqli($serverName, $userName,  $password, $dbname);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pass = $_POST['pass'];
    $query = "INSERT INTO `tutorial`.`users` (`username`,`email`,`age`,`pass`) VALUES ('$username','$email','$age','$pass')";
    //  echo $query;
    $query_run = mysqli_query($connection, $query);
    if ($query_run) {
        header("Location: mainindex.php");
    }
    $_SESSION["email"] = $email;
}
?>