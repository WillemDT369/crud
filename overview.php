<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Track your collection of snakes</title>
</head>
<body>

<h1>What kind of snakes do you like?</h1>
<form method="post">
	<label for="snake">Add new species: </label>
	<input type="text" id="snake" name="snake">
	<input type="submit" value="submit" name="submit">
</form>

<ul>
<?php foreach ($cards as $card) : ?>
    <li>
		<?=$card['name']?><a style="text-decoration:none" href="edit.php?id=<?=$card['id']?>&name=<?=$card['name']?>"> edit</a>
						  
	</li>
<?php endforeach; ?>
</ul>

</body>
</html>