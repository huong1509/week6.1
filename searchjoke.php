<?php
    if (isset($_POST['search'])) {  
        try {
            include 'includes/DatabaseConnection.php'; 
            $jk = $_POST['searchjoke'];
            $sql = "SELECT * FROM joke
            WHERE joketext = :searchjoke";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':searchjoke', $_POST['searchjoke']); 
            $stmt->execute();
            $employees = $stmt->fetchAll();
            // header('location: jokes.php'); 

            ob_start(); 
            include 'templates/jokes.html.php'; 
            $output = ob_get_clean(); 

        } catch (PDOException $e) { 
            $title = 'An error has occurred';
            $output = 'Database error: ' . $e->getMessage();
        }
    } else { 
        $title = 'Search joke';
        ob_start(); 
        include 'templates/searchjoke.html.php'; 
        $output = ob_get_clean(); 
    }

    include 'templates/layout.html.php'; 
?>