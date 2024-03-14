<?php
    session_start();
    $con = mysqli_connect('localhost','root','','tutorial');
    if(isset($_POST['login'])){
        $result = mysqli_query($con,"SELECT * FROM user WHERE email = '".$_POST['username']."' and password = '".$_POST['pass']."' limit 1");
        $row  = mysqli_fetch_array($result);
        if($result){
            if(mysqli_num_rows($result) >= 1) {
                // $_SESSION["username"] = $row[username];
                // $_SESSION["pass"] = $row[pass];
                $_SESSION['email'] = $_POST['username'];
                header('location:mainindex.php');
                exit();
            } else {
                echo "Invalid Username or Password!";
                exit();
            }
        }
       
    }
    // if(isset($_SESSION["id"])) {
    //     header("Location:login.php");
    // }
?>