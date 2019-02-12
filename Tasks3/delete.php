<?php

$id = $__GET['id'];

require 'database/QueryBuilder.php';
$db = new QueryBuilder;
$tasks = $db->deleteTasks($id);

header('Location: /');




