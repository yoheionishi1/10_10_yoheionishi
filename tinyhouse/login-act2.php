<?php
session_start();

//共通で使用するものは別ファイルで管理
include("function.php");

//1. DB接続します
$pdo=db_con();

//２．データ登録SQL作成
$id = $_POST["admin_id"];
$pw = $_POST["admin_pass"];
$stmt = $pdo->prepare("SELECT * FROM admin_user WHERE admin_id=:admin_id AND admin_pass=:admin_pass");
$stmt->bindValue(':admin_id',$id, PDO::PARAM_STR);
$stmt->bindValue(':admin_pass',$pw, PDO::PARAM_STR);
$res = $stmt->execute();

//３．データ表示
if($res==false){
queryError($stmt);
}
$val = $stmt->fetch();//1レコードのみ取得する方法

//4該当レコードをsessionに値を代入
if( $val["id"] != "" ){
$_SESSION["chk_ssid"] = session_id();//キー発行
$_SESSION["name"]      = $val['name'];
header("Location: select3.php");
}else{
header("Location: login2.php");
}
exit();

?>