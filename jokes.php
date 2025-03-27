<?php
try {
    include 'includes/DatabaseConnection.php'; 

    $sql = 'SELECT joke.id, joketext, jokedate, image, `name`, email, categoryName FROM joke 
            INNER JOIN author ON authorid = author.id
            INNER JOIN categories on categoryid = categories.id'
            ;

    $jokes = $pdo->query($sql); 

    ob_start();  
    include 'templates/jokes.html.php'; 
    $output = ob_get_clean(); 
} catch (PDOException $e) { 
    $output = 'Database error: ' . $e->getMessage(); 
}

include 'templates/layout.html.php'; 
?>