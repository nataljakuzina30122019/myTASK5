<?php

$id = $__GET['id'];

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");

$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statemet->execute();

header('Location: /');




