<?php require_once 'controlador.php'; ?>
<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulari de contacte</title>
	<link rel="stylesheet" href="estils.css">
</head>
<body>
	<form method="post" action="">
		<label for="nom">Nom:</label>
		<input type="text" id="nom" name="nom" value="<?= htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') ?>">

		<label for="correu">Correu:</label>
		<input type="email" id="correu" name="correu" value="<?= htmlspecialchars($correu, ENT_QUOTES, 'UTF-8') ?>">

		<label for="text">Text:</label>
		<textarea id="text" name="text"><?= htmlspecialchars($text, ENT_QUOTES, 'UTF-8') ?></textarea>

		<input type="submit" value="Enviar">

		<?php if ($missatge !== ''): ?>
			<p><?= htmlspecialchars($missatge, ENT_QUOTES, 'UTF-8') ?></p>
		<?php endif; ?>
	</form>
</body>
</html>
