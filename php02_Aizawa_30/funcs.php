<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
};


function db_conn()
{
    try {
        $db_name= 'assignment_db';
        $db_id = 'root';
        $db_pw = 'root';
        $db_host = '127.0.0.1';
        //ID:'root', Password: 'root'
        $pdo = new PDO('mysql:dbname='. $db_name . ';charset=utf8;unix_socket=/tmp/mysql.sock;host=' . $db_host, $db_id, $db_pw);
        return $pdo;
      } catch (PDOException $e) {
        exit('DBConnectError:'.$e->getMessage());
      };

};


function sql_error($stmt){
    $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
};


function redirect($file_name){
    header('Location: ' . $file_name);
    exit();
}