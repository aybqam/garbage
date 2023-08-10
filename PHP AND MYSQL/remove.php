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

// Handle removing from favorites
if (isset($_POST["id"])) {
    $id = $_POST["id"];

    $delete = $conn->prepare("DELETE FROM Favorites WHERE id = ?");
    $delete->bind_param("i", $id);
    $delete->execute();

    // Handle success or error response (e.g., echo a JSON response)
    if ($delete->affected_rows > 0) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Failed to remove from favorites']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
}

// Close the connection
$conn->close();
?>
