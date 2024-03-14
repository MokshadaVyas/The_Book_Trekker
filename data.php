<?php
header("Content-type:data.css");
$black = "#000";
$text = "100px";
$booktitle  = $_POST['booktitle'];
$author  = $_POST['author'];
$type = $_POST['type'];
$genre  = $_POST['genre'];
$name  = $_POST['name'];
$email  = $_POST['email'];
$feedback  = $_POST['feedback'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'the_book_trekker');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO `the_book_trekker`.`contribution` (`booktitle`,`author`, `type`, `genre`, `name`, `email`, `feedback`) VALUES ('$booktitle', '$author', '$type', '$genre', '$name', '$email', '$feedback')");
    // $stmt->bind_param("ssssssd", $booktitle, $author, $type, $name, $email, $feedback);

    if ($stmt->execute()) {
        echo "Thank You!\n";
        echo "Your feedback,contribution has been received";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
