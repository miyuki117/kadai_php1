<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$learn = $_POST["learn"];
$review = $_POST["review"];



//作成日時,名前,メールアドレス
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$learn.",".$review;
//File書き込み
$file = fopen("data/data.txt","a");	// ファイル読み込み
fwrite($file, $str."\n"); //ファイルを改行する
fclose($file);



?>

<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>



<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">


</head>

<body>

<h2>送信しました。</h2>

<div class="form_style">

<ul>
    <li><a href="read.php">他の人の感想を見る</a></li>
    <li><a href="post.php">入力画面へ戻る</a></li>
</ul>
</div>
</body>
</html>