<?php
$sever = "localhost";
$username = "root";
$password = "";
$db_name = "nonfiction";
$con = new mysqli($sever,$username,$password,$db_name);
$user_id = $_SESSION['book_info']; // Use the user's session ID or however you manage user sessions
$sql = "SELECT * FROM book_info";
$result = $con->query($sql);
