<?php

$id = $_GET['id'];

require_once('funcs.php');
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT * FROM assignment_an_table where id = :id");
$status = $stmt->execute();
$stmt->bindValue(':id', $id, PDO::PARAM_INT);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();

$view="";
if ($status === false) {
  sql_error($stmt);
    //execute（SQL実行時にエラーがある場合）
}else{
    $view = $stmt->fetch();
};

?>


<html>

<!-- input part -->

<head>
    <meta charset="utf-8">
    <title>詳細画面</title>
</head>

<body>
    <form action="/php02_Aizawa_30/update.php" method="post">
        お名前: <input type="text" name="name" value="<?= $view['name']?>">
        性別:
        <select name="sex" type="text">
            <option value="<?= $view['sex']?>"><?= $view['sex']?></option>
            <option value="<?= $view['sex']?>">女性</option>
            <option value="<?= $view['sex']?>">男性</option>
            <option value="<?= $view['sex']?>">ニュートラル</option>
        </select>
        年齢: <input type="text" name="age" value="<?= $view['age']?>">
        お悩み:<textarea name="text" rows="4" clos="40" placeholder = "洋服にまつわる悩みを記載してください。"><?= $view['text']?></textarea>
        お名前: <input type="hidden" name="id" value="<?= $view['id']?>">
        <input type="submit" value="修正">
    </form>
</body>

</html>
