<?php
require_once('funcs.php');
$pdo = db_conn();

$id = $_GET['id'];

$stmt = $pdo->prepare('DELETE FROM assignment_an_table WHERE id = :id;');

$stmt->bindValue(':id', $id, PDO::PARAM_INT);  

$status = $stmt->execute();

if($status === false){
  sql_error($stmt);
}else{
  redirect ('select.php');
}

?>