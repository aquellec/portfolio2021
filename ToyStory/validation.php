<?php

if (isset($_POST)) {
    if (empty($_POST['name'])) {
        $erreur['name'] = 'Veuillez remplir le nom';
    }
    else if (mb_strlen($_POST['name']) > 16 || mb_strlen($_POST['name']) < 2) {
        $erreur['name'] = 'Veuillez remplir correctement le nom';
    }
    if (empty($_POST['mail'])) {
        $erreur['mail'] = 'Veuillez remplir l\'email';
    } elseif (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
        $erreur['mail'] = 'Veuillez remplir l\'email correctement';
    }
    if (!empty($erreur)) {
        echo json_encode($erreur);
    } else {
        echo json_encode(true);
    }
}
?>