<?php

class QueryBuilder
{
function getAllTasks()
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "SELECT * FROM tasks";
$statement = $pdo->prepare($sql);
$result = $statement->execute();
$tasks = $statement->fetchAll(PDO::FETCH_ASSOC);
return $tasks;
}
function addTask($data)
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$sql = "INSERT INTO tasks (title,content)VALUESm(:title, :content)";
$statement = $pdo->prepare($sql);
$statement->execute($data);
}
function getTask($id)
{
$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");
$statement = $pdo->prepare("SELECT * FROM tasks WHERE id=:id");
$statement->bindParam(":id", $id);
$statement->execute();
$task = $statement->fetch(PDO::FETCH_ASSOC);

return $task;

}

function updateTask($data)
{
$pdo = new PDO("mysql:host=localhoct;dbname=test", "root", "");
$sql = 'UPDATE tasks SET title=:title, content=:content WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->execute($data);
}
function deleteTasks($id)
{

$pdo = new PDO("mysql:host=localhost; dbname=test", "root", "");

$sql = 'DELETE FROM tasks WHERE id=:id';
$statement = $pdo->prepare($sql);
$statement->bindParam(":id", $id);
$statemet->execute();
}




}















