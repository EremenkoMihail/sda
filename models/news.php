<?phpinclude_once('startup.php');startup();//// Список всех статей//function articles_all(){	// Запрос.	$query = "SELECT * FROM news ORDER BY id_article DESC";	$result = mysql_query($query);								if (!$result)		die(mysql_error());		// Извлечение из БД.	$n = mysql_num_rows($result);	$articles = array();	for ($i = 0; $i < $n; $i++)	{		$row = mysql_fetch_assoc($result);				$articles[] = $row;	}		return $articles;}//// Конкретная статья//function articles_get($id_article){	$query = "SELECT * FROM news WHERE id_article = $id_article";	$result = mysql_query($query);	$article = array();	$row = mysql_fetch_assoc($result);		if(!$result)			die(mysql_error());	return $row;}//// Добавить статью//function articles_new($title, $content){	// Подготовка.	$title = trim($title);	$content = trim($content);	// Проверка.	if ($title == '')		return false;		// Запрос.	$t = "INSERT INTO news (title, content) VALUES ('%s', '%s')";		$query = sprintf($t, 	                 mysql_real_escape_string($title),	                 mysql_real_escape_string($content));		$result = mysql_query($query);								if (!$result)		die(mysql_error());			return true;}//// Изменить статью//function articles_edit($id_article, $title, $content){	// Подготовка.	$id_article = $_GET['id'];	$title = trim($title);	$content = trim($content);	// Проверка.	if ($title == '') 		return false;	if ($content == '')		return false;	// Запрос.	$t = "UPDATE news SET title = '$title' , content = '$content' WHERE  id_article = '$id_article'";		$query = sprintf($t, 	                 mysql_real_escape_string($title),	                 mysql_real_escape_string($content));		$result = mysql_query($query);								if (!$result)		die(mysql_error());			return true;}//// Удалить статью//function articles_delete($id_article){	$id_article = $_GET['id'];	$query = "DELETE FROM test . news  WHERE news . id_article = $id_article";	$result = mysql_query($query);	if (!$result)		die(mysql_error());}//// Короткое описание статьи//function articles_intro($article){	$max_lenght = 80;	$article_lenght = mb_strlen($article['content']);	if ($article_lenght > $max_lenght)		{		$str = mb_substr(($article['content']),0,$max_lenght);		$temp = explode( ' ',$str);		array_pop($temp);		$str = implode(' ',$temp);		}	else 		$str = ($article['content']);	return $str;	}//// Подключение шаблона.//function view_include($fileName, $vars = array()){	// Устанавливаем переменные	foreach($vars as $key => $value)		$$key = $value;	// Генерация HTML в строку.	ob_start();	include $fileName;	return ob_get_clean();	}