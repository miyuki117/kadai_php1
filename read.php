<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<table>
  <tr>
    <th> id</th>
    <th> name </th>
    <th> mail </th>
    <th> 学び </th>
    <th> 評価 </th>
  </tr>

  <ul class="form_style">
    <li><a href="post.php">入力画面へ戻る</a></li>
  </ul>
  

 <?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く


// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo "<tr>";
    $str2 =explode(",",$str); //1行ずつ 「,」で要素を区切って配列にする
    // var_dump($str); 

for ($i=0; $i < count($str2); $i++) { 
    echo "<td>".$str2[$i]."</td>"; // 配列の要素を順番に表にする
}
echo "</tr>";
};

fclose($file); // ファイルを閉じる

?>

<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>



    
</body>
</html>