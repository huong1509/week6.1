<?php
try {
    include '../includes/DatabaseConnection.php'; 
    include '../includes/DatabaseFunction.php'; 

    $jokes = allJokes($pdo);
    $title = 'Joke List';

    $totalJokes = totalJokes($pdo);

    ob_start();  
    include '../templates/jokes.html.php'; 
    $output = ob_get_clean(); 
} catch (PDOException $e) { 
    $output = 'Database error: ' . $e->getMessage(); 
}

include '../templates/admin_layout.html.php'; 
?>