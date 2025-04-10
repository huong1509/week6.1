<?php

function query($pdo, $sql,$parameters = []){
    $query = $pdo->prepare($sql);
    $query->execute($parameters);
    return $query;
}

function totalJokes($pdo){
    $query = query($pdo,'SELECT COUNT(*)FROM joke ');
    $row = $query->fetch();
    return $row[0];
}

function getJoke($pdo, $id) {
    $parameters = [':id'=> $id];
    $query = query($pdo, 'SELECT * FROM joke WHERE id =:id', $parameters);
    return $query->fetch();
}

function updateJoke($pdo, $jokeid, $joketext) {
    $query = 'UPDATE joke SET joketext = :joketext WHERE id = :id';
    $parameters = [':id'=> $jokeid, ':joketext' => $joketext];
    query($pdo,$query, $parameters);
}

function deleteJoke($pdo, $jokeid){
    $query = "DELETE FROM joke WHERE id = :id";
    $parameters = [':id' =>$jokeid];
    query($pdo, $query, $parameters);
}
function addJoke($pdo, $joketext, $fileToUpload,$authorid, $categoryid) {
    $query = 'INSERT INTO joke SET
            joketext = :joketext,
            jokedate = CURDATE(),
            image = :fileToUpload,
            authorid = :authorid,
            categoryid = :categoryid';
    $parameters = [':joketext' => $joketext, ':fileToUpload' => $fileToUpload,':authorid' => $authorid, ':categoryid' => $categoryid];
    query($pdo, $query, $parameters);
}

function allAuthors($pdo){
    $authors = query($pdo, 'SELECT * FROM author');
    return $authors->fetchAll();
}

function allCategories($pdo){
    $categories = query($pdo, 'SELECT * FROM categories');
    return $categories->fetchAll();
}

function allJokes($pdo) {
    $jokes = query($pdo, 'SELECT joke.id, joketext, jokedate, image, `name`, email, categoryName FROM joke 
            INNER JOIN author ON authorid = author.id
            INNER JOIN categories on categoryid = categories.id'
            );
    return $jokes->fetchAll();
}

?>

