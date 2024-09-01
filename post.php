<html>
<head>
<meta charset="utf-8">
<title>PHP課題１</title>
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/style.css">



</head>
<body>
<h1>授業後の感想アンケート</h1>

<div class="form_style">
	<form action="write.php" method="post">
		<div>お名前: <input type="text" name="name"></div>
		<div>EMAIL: <input type="email" name="mail"></div>
		<div>学び：<input type="text" name="learn"></div>
		<div>評価：
			<input type="radio" name="review" value="5">5
			<input type="radio" name="review" value="4">4
			<input type="radio" name="review" value="3">3
			<input type="radio" name="review" value="2">2
			<input type="radio" name="review" value="1">1
		</div>
		<input type="submit" value="送信" class="button left_style">

	</form>
</div>


</body>
</html>