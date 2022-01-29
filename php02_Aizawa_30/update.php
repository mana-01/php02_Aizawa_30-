<?php
require_once('funcs.php');
$pdo = db_conn();

$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$text = $_POST['text'];
$id = $_POST['id'];

$stmt = $pdo->prepare('UPDATE assignment_an_table 
SET 
name= :name,
sex= :sex,
age= :age,
text= :text

WHERE id = :id;');

$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age', $age, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':text', $text, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)

$status = $stmt->execute();

if($status === false){
  sql_error($stmt);
}else{
  redirect ('select.php');
};
