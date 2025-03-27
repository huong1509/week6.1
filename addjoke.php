<?php
    // if (isset($_POST['submit'])) {  
    //     try {
    //         include 'includes/DatabaseConnection.php'; 
    //         $jk = $_POST['joketext'];
    //         $sql = "INSERT INTO joke (joketext, jokedate) VALUES (:joketext, CURDATE())";
    //         $stmt = $pdo->prepare($sql);
    //         $stmt->bindValue(':joketext', $_POST['joketext']); 
    //         $stmt->execute();
    //         // $pdo->query($sql);
    //         header('location: jokes.php'); 

    if(isset($_POST['joketext'])){
        try{
            include 'includes/DatabaseConnection.php';
            
            $sql = 'INSERT INTO joke SET
            joketext = :joketext,
            jokedate = CURDATE(),
            authorid = :authorid,
            categoryid = :categoryid';
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':joketext', $_POST['joketext']);
            $stmt->bindValue(':authorid', $_POST['author']);
            $stmt->bindValue(':categoryid', $_POST['category']);
            $stmt->execute();
            header('location: jokes.php');

        } catch (PDOException $e) { 
            $title = 'An error has occurred';
            $output = 'Database error: ' . $e->getMessage();
        }
    } else { 
        include 'includes/DatabaseConnection.php';
        $title = 'Add a new joke';
        $sql_a = 'select * from author';
        $authors = $pdo->query($sql_a);
        $sql_c = 'select * from categories';
        $categories = $pdo->query($sql_c);
        ob_start(); 
        include 'templates/addjoke.html.php'; 
        $output = ob_get_clean(); 
    }

    include 'templates/layout.html.php'; 
?>