<?/*
Редактор статьи
*/?>
<html>
<body>
	<h1>Редактирование статьи</h1>
	<? if($error) :?>
		<b style="color: red;">Поля не должны быть пустыми!</b>
	<? endif ?>
	<form method="post">
		Название:
		<br/>
		<input type="text" name="title" value="<?=$articles['title']?>" />
		<br/>
		<br/>
		Содержание:
		<br/>
		<textarea name="content"><?=$articles['content']?></textarea>
		<br/>
		<input type="submit" value="Сохранить" />
	</form>
</body>
</html>
