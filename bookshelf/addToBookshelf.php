<?php
session_start(); // Start the session to store user's bookshelf data

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $book = $_POST['images']; // Assuming 'book' is sent as a parameter from your HTML form

    // Check if the user's bookshelf array exists in the session, if not, initialize it
    if (!isset($_SESSION['bookshelf'])) {
        $_SESSION['bookshelf'] = array();
    }

    // Add the book to the user's bookshelf
    $_SESSION['bookshelf'][] = $book;

    // You can also store this data in a database for persistence
    // For simplicity, we'll just work with the session here

    // Send a response back to your JavaScript to indicate success
    echo json_encode(['success' => true]);
} else {
    // Handle non-POST requests or other cases
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}
?>
