<?php
try {
    include 'includes/DatabaseConnection.php'; 
    include 'includes/DatabaseFunction.php'; 

    // $sql = 'SELECT joke.id, joketext, jokedate, image, `name`, email, categoryName FROM joke 
    //         INNER JOIN author ON authorid = author.id
    //         INNER JOIN categories on categoryid = categories.id'
    //         ;

    // $jokes = $pdo->query($sql); 
    $jokes = allJokes($pdo);
    $title = 'Joke List';

    $totalJokes = totalJokes($pdo);

    ob_start();  
    include 'templates/public_jokes.html.php'; 
    $output = ob_get_clean(); 
} catch (PDOException $e) { 
    $output = 'Database error: ' . $e->getMessage(); 
}

include 'templates/layout.html.php'; 
?>