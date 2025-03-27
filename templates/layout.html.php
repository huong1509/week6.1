<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="jokes.css">
    <title>Joke System</title>

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
