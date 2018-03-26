<!DOCTYPE html>
<?php
		$userName = 'Евгения Кузина';
		$userAge = 29;
		$userMail = 'evgenia.kuzina89@gmail.com';
		$userCity = 'Москва';
		$userInfo = 'В прошлом пиарщик, сейчас пытаюсь научиться новому. P.S. В Нетологии - аккаунт друга.'
?>
<html>
  <head>
    <title>Evgenia Kuzina</title>
  </head>
  <body>
    <h2>Страница пользователя Евгения</h2>
    <table style="width:100%">
		<tr>
			<td><b>Имя</b></td>
			<td><?= $userName ?></td>
		</tr>
		<tr>
			<td><b>Возраст</b></td>
			<td><?= $userAge ?></td>
		</tr>
		<tr>
			<td><b>Почта</b></td>
			<td><a href="mailto:evgenia.kuzina89@gmail.com"><?= $userMail ?></a></td>
		</tr>
		<tr>
			<td><b>Город</b></td>
			<td><?= $userCity ?></td>	
		</tr>
		<tr>
			<td><b>Информация</b></td>
			<td><?= $userInfo ?></td>
		</tr>
	</table>
  </body>
</html>
