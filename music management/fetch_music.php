<?php
// Database connection details


// Create a connection
$conn = new mysqli("localhost","root","","music_db",3307);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve all songs from the database
$sql = "SELECT title, artist, album, genre FROM song";
$result = $conn->query($sql);

$songs = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $songs[] = $row;
    }
}

// Return the song data as JSON
header('Content-Type: application/json');
echo json_encode($songs);

// Close connection
$conn->close();
?>
