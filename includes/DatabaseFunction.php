<?php
function query($pdo, $sql){
    $query = $pdo->prepare($sql);
    $query->excute();
    return $query;
}

function totalJokes($pdo){
    $query = query($pdo,'SELECT COUNT(*)FROM joke ');
    $row = $query->fetch();
    return $row[0];
}
?>