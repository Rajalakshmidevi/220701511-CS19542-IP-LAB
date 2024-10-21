<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Songs</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('VIEW PAGE.jpeg');
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

        h1, h2, div {
            font-weight: bold;
        }

        main {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 10px;
            width: 80%;
            max-width: 600px;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        #song-list div {
            margin-bottom: 10px;
            padding: 5px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Your Music Collection</h1>
            <nav>
                <a href="index.php">Home</a>
                <a href="manage.php">Manage Music</a>
            </nav>
        </header>
        <section>
            <h2>List of Songs</h2>
            <div id="song-list"></div>
        </section>

        <script>
            // Fetch music data from backend and display it
            fetch('fetch_music.php')
                .then(response => response.json())
                .then(data => {
                    let songList = document.getElementById('song-list');
                    if (data.length === 0) {
                        songList.innerHTML = '<p>No songs available.</p>';
                    } else {
                        data.forEach(song => {
                            let songDiv = document.createElement('div');
                            songDiv.innerHTML = `<strong>${song.title}</strong> by ${song.artist} 
                            (Album: ${song.album}, Genre: ${song.genre})`;
                            songList.appendChild(songDiv);
                        });
                    }
                })
                .catch(error => {
                    console.error('Error fetching music data:', error);
                });
        </script>
    </main>
</body>
</html>
