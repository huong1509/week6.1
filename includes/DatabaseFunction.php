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
    $parameters = [':id'=> $jokeid, ':joketext' => $joketext];
    $query = query($pdo, 'UPDATE joke SET joketext = :joketext WHERE id = :id', $parameters);
}

?>

