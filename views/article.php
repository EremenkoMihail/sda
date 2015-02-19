<html>
<head>
	<title><?=$article['title']?></title>
	<meta content="text/html" charset="utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
	<h2><?=$article['title']?></h2>
	<p><?=$article['content']?></p>
	<a href="../control/edit.php?id=<?=$article['id_article']?>">Редактировать</a>&nbsp
	<a href="../control/edit.php?id=<?=$article['id_article']?>&delete=1">Удалить</a>
</body>
</html>