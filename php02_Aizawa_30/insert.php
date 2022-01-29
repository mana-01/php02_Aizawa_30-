<?php
//1. POSTデータ取得

require_once('funcs.php');
$pdo = db_conn();

$name = $_POST['name'];
$sex = $_POST['sex'];
$age = $_POST['age'];
$text = $_POST['text'];

// PDOとは PDO（PHP Data Object）とは、PHP標準（5.1.0以降）のデータベース接続クラスのことです。 
// PHPは標準でMySQLやPostgreSQLやSQLiteなど、色々なデータベースに接続するための命令が用意されています。


// 1. SQL文を用意
$stmt = $pdo->prepare("INSERT INTO assignment_an_table (id, name, sex, age, text, date)VALUES(NULL, :name, :sex, :age, :text, sysdate())");

//  2. バインド変数を用意
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':sex', $sex, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':age', $age, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':text', $text, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)

//  3. 実行
$status = $stmt->execute();

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  sql_error($stmt);
}else{
  //５．index.phpへリダイレクト
  redirect ('index.php');
}
?>
