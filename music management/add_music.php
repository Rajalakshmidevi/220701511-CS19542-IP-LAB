<?php
// Database connection
$host = "localhost"; // Or your database host
$username = "root";  // Replace with your DB username
     // Replace with your DB password
$dbname = "music_db"; // Your database name

// Create connection
$conn = new mysqli($host, $username, "", $dbname,3307);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form input values
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $artist = mysqli_real_escape_string($conn, $_POST['artist']);
    $album = mysqli_real_escape_string($conn, $_POST['album']);
    $genre = mysqli_real_escape_string($conn, $_POST['genre']);

    // SQL query to insert data into songs table
    $sql = "INSERT INTO song (title, artist, album, genre) 
            VALUES ('$title', '$artist', '$album', '$genre')";

    if ($conn->query($sql) === TRUE) {
        echo "New song added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>
