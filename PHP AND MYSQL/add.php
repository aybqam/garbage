<?php
// Start the session
session_start();

// Database connection info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle adding to favorites
if (isset($_POST["id"], $_POST["name"], $_POST["price"], $_POST["image"])) {
    $id = $_POST["id"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $image = $_POST["image"];

    $insert = $conn->prepare("INSERT INTO Favorites (id, name, price, image) VALUES (?, ?, ?, ?)");
    $insert->bind_param("isds", $id, $name, $price, $image);
    $insert->execute();

    // Handle success or error response (e.g., echo a JSON response)
    if ($insert->affected_rows > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to add to favorites']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}

// Close the connection
$conn->close();
?>
