<?php
$nom = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$text = trim($_POST['text'] ?? '');

$missatge = '';
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	if ($nom === '') {
		$errors[] = 'nom';
	}

	if ($correu === '') {
		$errors[] = 'adreça de correu';
	}

	if ($text === '') {
		$errors[] = 'text';
	}

	if ($errors === []) {
		$missatge = 'Enviat correctament';
	} else {
		$missatge = 'Camps buits: ' . implode(', ', $errors);
	}
}
