<?php

require_once('funcs.php');
$pdo = db_conn();

//２．データ取得SQL作成
$stmt = $pdo->prepare("SELECT * FROM assignment_an_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if ($status==false) {
  sql_error($stmt);
    //execute（SQL実行時にエラーがある場合）
}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<p>';
    $view .= '<a href="detail.php?id=' . $result['id'] . '">';
    $view .= h($result['date']) . '/' . h($result['name']) . '/' . h($result['sex']) . '/' . h($result['age']) . '/' . h($result['text']);
    $view .= '</a>';
    $view .= '<a href="delete.php?id=' . $result['id'] . '">';
    $view .= '[ Delete ]';
    $view .= '</a>';
    $view .= '</p>';
    // .で追加の意味。Append的な役割がある。.がないと更新されてしまう。
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>フリーアンケート表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->

</body>
</html>
