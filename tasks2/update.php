<?php

$data = [
    "id"    =>  $_GET['id'],
    "title" =>  $_POST['title'],
    "content"  => $_POST['content']
 ];

$pdo = new PDO("mysql:host=localhoct;dbname=test", "root", "");
$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql); 

header("Location: http://localhost/MyNotes0/Tasks2/"); exit;


