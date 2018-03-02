<?php
//入力チェック(受信確認処理追加)
if(
!isset($_POST["admin_name"]) || $_POST["admin_name"]=="" ||
!isset($_POST["com_name"]) || $_POST["com_name"]=="" ||
!isset($_POST["admin_id"]) || $_POST["admin_id"]=="" ||
!isset($_POST["admin_pass"]) || $_POST["admin_pass"]==""
){
exit('エラーです 前の画面に戻って入力しなおしてください');
}
//1. POSTデータ取得//nameが大事
$adname = $_POST["admin_name"];
$company = $_POST["com_name"];
$id =$_POST["admin_id"];
$pw=$_POST["admin_pass"];
//2. DB接続します(エラー処理追加)
try{
$pdo=new PDO('mysql:dbname=tiny;charset=utf8;host=localhost','root','');
} catch(PDOException $e){
exit('DbConnectError:' .$e->getMessage());
}
//３．データ登録SQL作成→実行
//PARAM_STRは文字列、PARAM_intは数字
$sql="INSERT INTO admin_user(id, admin_name, com_name, admin_id,
admin_pass)VALUES(NULL, :a1, :a2, :a3, :a4)";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':a1', $adname,PDO::PARAM_STR);
$stmt->bindValue(':a2', $company,PDO::PARAM_STR);
$stmt->bindValue(':a3', $id,PDO::PARAM_STR);
$stmt->bindValue(':a4', $pw,PDO::PARAM_INT);
$status = $stmt->execute();
//４．データ登録処理後
if($status==false){
//SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
$error = $stmt->errorInfo();
exit("QueryError:".$error[2]);
}else{
//５．登録画面へリダイレクト
//半角スペース
header("Location: select3.php");
exit;
}
?>