<?//Редакторование и удаление статейinclude_once('../models/news.php');include_once('../models/startup.php');startup();header('Content-type: text/html; charset=utf-8');$articles = articles_get($_GET['id']);//Удаление статейif (isset($_GET['delete']))	{	articles_delete($_GET['id']);	header('Location: editor.php');	die();	}//Редактор статейif (!empty($_POST)){	if (articles_edit($_GET['id'] , $_POST['title'] , $_POST['content']))	{		header('Location: editor.php');		die();	}		$title = $_POST['title'];	$contents = $_POST['content'];	$error = true;}else{	$error = false;}// Вывод в шаблон.$title = 'Редактор';// Внутренний шаблон.$content = view_include('../views/edit.php', array('articles' => $articles));// Внешний шаблон.$page = view_include(	'../views/index.php',	array('title' => $title, 'content' => $content));// Вывод.echo $page;