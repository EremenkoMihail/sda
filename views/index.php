<?/*
Основной шаблон
===============
$title - заголовок
$content - HTML страницы
*/?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>PHP. Уровень 2. <?=$title?></title>
	<meta content="text/html" charset="utf-8" http-equiv="content-type">
	<link rel="stylesheet" type="text/css" media="screen" href="style.css" />
</head>
<body>
	<h2>PHP. Уровень 2</h2>
	<h4><?=$title?></h4>
		Главная | <a href="control/editor.php">Список статей</a>
	<hr/>
		<?=$content?>
	<hr/>	
		<footer>
			<p><small>Бета версия<small></p>
			<small>Новости со всего мира</small>
		</footer>
			
</body>
</html>