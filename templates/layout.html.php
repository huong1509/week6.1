<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="jokes.css">
    <title>Joke System</title>
    <style>
    nav ul {
        list-style: none;
        padding: 0;
        margin: 0;
        display: flex;
        background: #333;
    }
    nav ul li {
        margin: 0;
        padding: 10px 20px;
    }
    nav ul li a {
        color: white;
        text-decoration: none;
    }
    /* nav ul li a:hover {
        background: #555;
    } */
</style>
</head>

<body>
    <header><h1>Internet Joke Database</h1></header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Jokes List</a></li>
            <li><a href="addjoke.php">Add a new joke</a></li>
            <li><a href="searchjoke.php">Search joke</a></li>
        </ul>
    </nav>
    <main bgcolor = 'pink'>
        <?= $output ?>
    </main>
    <footer bgcolor = 'blue'>&copy; IJDB 2023</footer>
</body>
</html>
