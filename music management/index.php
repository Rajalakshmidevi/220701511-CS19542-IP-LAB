<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Management System</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            background-image: url('INDEX PAGE.jpg'); /* Replace with your image path */
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

        h1, h2, p, nav a {
            font-weight: bold;
        }

        header {
            margin-bottom: 20px;
        }

        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 30px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <main>
        <header>
            <h1>Music Management System</h1>
            <nav>
                <a href="manage.php">Manage Music</a>
                <a href="view.php">View Songs</a>
            </nav>
        </header>
        <section>
            <h2>Welcome to the Music Management System</h2>
            <p>Use this system to manage and explore your music collection.</p>
        </section>
    </main>
</body>
</html>
