<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1">
  <tr>
    <th>
      id
    </th>
    <th>
      name
    </th>
    <th>
      mail
    </th>
    <th>
      breakfast
    </th>
  </tr>

 <?php
$file = fopen('data/data.txt', 'r'); // ファイルを開く

$str = fgets($file);

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    echo "<tr>";
    $str2 =explode(",",$str);
for ($i=0; $i < count($str2); $i++) {
    echo "<td>".$str2[$i]."</td>"; // str_2
}
echo "</tr>";
};

fclose($file); // ファイルを閉じる

?>
    
</body>
</html>