<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Music</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('MANAGE PAGE.jpg'); /* Replace with your image path */
            background-size: cover;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            color: white;
            text-align: center;
        }

        h1, label, button {
            font-weight: bold;
        }

        main {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            width: 300px;
        }

        form input {
            width: 100%;
            margin: 10px 0;
            padding: 10px;
            border: none;
            border-radius: 5px;
        }

        button {
            padding: 10px;
            width: 100%;
            border: none;
            border-radius: 5px;
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }

        nav a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Add New Song</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="view.php">View Songs</a>
            </nav>
        </header>
        <form action="add_music.php" method="POST">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>

            <label for="artist">Artist:</label>
            <input type="text" id="artist" name="artist" required>

            <label for="album">Album:</label>
            <input type="text" id="album" name="album">

            <label for="genre">Genre:</label>
            <input type="text" id="genre" name="genre">

            <button type="submit">Add Song</button>
        </form>
    </main>
</body>
</html>
